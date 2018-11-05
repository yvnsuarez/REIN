<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index() 
    {

        //Widgets
        $partners = DB::table('users')
                    ->where('UserTypeID', '4')
                    ->count();
        $assistants = DB::table('users')
                    ->where('UserTypeID', '2')
                    ->count();
        $motorists = DB::table('users')
                    ->where('UserTypeID', '3')
                    ->count(); 

        $totalusers = $partners + $assistants + $motorists;
       
       
        $cancelled = DB::table('reports')
                    ->where('Status',  'Cancelled')
                    ->count();
        $done = DB::table('reports')
                    ->where('Status', 'Done')
                    ->count();
        $ongoing = DB::table('reports')
                    ->where('Status', 'Ongoing')
                    ->count();
        
        //Pie Chart
        $data = DB::table('reports')
                    ->select(
                        DB::raw('servicetype as servicetype'),
                        DB::raw('count(*) as number'))
                    ->groupBy('servicetype')
                    ->get();
                $array[] = ['ServiceType', 'Number'];
                foreach($data as $key => $value)
                {
                $array[++$key] = [$value->servicetype, $value->number];
                }
    
        //dd($data);
        return view('Admin.dashboard', 
                        compact('partners', 'assistants', 'motorists', 
                                'cancelled', 'done', 'ongoing', 'totalusers'))
                        ->with('data', json_encode($array));
     
    }
}

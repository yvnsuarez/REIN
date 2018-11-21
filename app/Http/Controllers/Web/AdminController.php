<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Illuminate\Support\Carbon;

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
        
        date_default_timezone_set('Asia/Manila');
        $start = Carbon::now();
        $end = Carbon::now();

        //Pie Chart
        $pie = DB::table('reports')
                ->select(
                    DB::raw('servicetype as servicetype'),
                    DB::raw('count(*) as number'))
                ->groupBy('servicetype')
                ->get();
            $piearray[] = ['ServiceType', 'Total'];
            foreach($pie as $key => $value)
            {
            $piearray[++$key] = [$value->servicetype, $value->number];
            }
        
        $bar = DB::table('reports')
            ->select(
                DB::raw('status as status'),
                DB::raw('count(*) as number'))
            ->groupBy('status')
            ->get();
        $bararray[] = ['status', 'Total'];
        foreach($bar as $key => $value)
        {
        $bararray[++$key] = [$value->status, $value->number];
        }
        //dd($data);
        return view('Admin.dashboard', 
                        compact('partners', 'assistants', 'motorists', 
                                'cancelled', 'done', 'ongoing', 'totalusers', 'start', 'end'))
                        ->with('servicetype', json_encode($piearray))
                        ->with('status', json_encode($bararray));
        
    }

    public function daterange(Request $request) 
    {

        date_default_timezone_set('Asia/Manila');
        $start = Carbon::parse($request->start)->startOfDay();
        $end = Carbon::parse($request->end)->endOfDay();
        //Widgets
        $partners = DB::table('users')
                    ->where('UserTypeID', '4')
                    ->whereBetween('DateCreated', array(new Carbon($start), new Carbon($end)))
                    ->count();
        $assistants = DB::table('users')
                    ->where('UserTypeID', '2')
                    ->whereBetween('DateCreated', array(new Carbon($start), new Carbon($end)))
                    ->count();
        $motorists = DB::table('users')
                    ->where('UserTypeID', '3')
                    ->whereBetween('DateCreated', array(new Carbon($start), new Carbon($end)))
                    ->count(); 

        $totalusers = $partners + $assistants + $motorists;
       
        $cancelled = DB::table('reports')
                    ->where('Status',  'Cancelled')
                    ->whereBetween('DateSubmitted', array(new Carbon($start), new Carbon($end)))
                    ->count();
        $done = DB::table('reports')
                    ->where('Status', 'Done')
                    ->whereBetween('DateSubmitted', array(new Carbon($start), new Carbon($end)))
                    ->count();
        $ongoing = DB::table('reports')
                    ->where('Status', 'Ongoing')
                    ->whereBetween('DateSubmitted', array(new Carbon($start), new Carbon($end)))
                    ->count();
        
        //Pie Chart
        $pie = DB::table('reports')
                ->select(
                    DB::raw('servicetype as servicetype'),
                    DB::raw('count(*) as number'))
                ->whereBetween('DateSubmitted', array(new Carbon($start), new Carbon($end)))
                ->groupBy('servicetype')
                ->get();
            $piearray[] = ['ServiceType', 'Total'];
            foreach($pie as $key => $value)
            {
            $piearray[++$key] = [$value->servicetype, $value->number];
            }
        
        $bar = DB::table('reports')
            ->select(
                DB::raw('status as status'),
                DB::raw('count(*) as number'))
            ->whereBetween('DateSubmitted', array(new Carbon($start), new Carbon($end)))
            ->groupBy('status')
            ->get();
        $bararray[] = ['status', 'Total'];
        foreach($bar as $key => $value)
        {
        $bararray[++$key] = [$value->status, $value->number];
        }
        //dd($data);
        return view('Admin.dashboard', 
                        compact('partners', 'assistants', 'motorists', 
                                'cancelled', 'done', 'ongoing', 'totalusers', 'start', 'end'))
                        ->with('servicetype', json_encode($piearray))
                        ->with('status', json_encode($bararray));
        
    }
}

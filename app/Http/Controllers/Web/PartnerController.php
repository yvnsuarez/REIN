<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Reports;
use Auth;
use Illuminate\Support\Carbon;

class PartnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:partner');
    }

    public function index() 
    {

        //Widgets
        $getpartner = Auth::user();
        $partner = $getpartner->id;

        $getassistant = ['PartnerCompany' => $partner, 'UserTypeID' => '2'];
        $assistant = DB::table('users')
                        ->where($getassistant)
                        ->count();

        $getavailable = ['AssignStatus' => 'Available', 'Status' => 'Activated', 'PartnerCompany' => $partner, 'UserTypeID' => '2'];  
        $availableassistant = DB::table('users')
                                ->where($getavailable)
                                ->count();

        $getnotavailable = ['AssignStatus' => 'Not Available', 'Status' => 'Activated', 'PartnerCompany' => $partner, 'UserTypeID' => '2'];
        $notavailableassistant = DB::table('users')
                                    ->where($getnotavailable)
                                    ->count();

        $getsales = ['partner' => $partner, 'status' => 'Done'];
        $totalsales = DB::table('reports')
                        ->where($getsales)
                        ->sum('totalservice');

        $getservices = ['partner' => $partner, 'status' => 'Done'];
        $totalservice = DB::table('reports')
                        ->where($getservices)
                        ->count();
                        

        $getongoing = ['partner' => $partner, 'status' => 'Ongoing'];
        $totalongoing = DB::table('reports')
                        ->where($getongoing)
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

        //dd($weekdata);
        return view('Partner.home', 
                    compact('assistant', 'availableassistant', 'notavailableassistant', 
                            'totalsales', 'totalservice', 'totalongoing'))
                    ->with('data', json_encode($array));
 
    }
}

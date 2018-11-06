<?php

namespace App\Http\Controllers\Web\Admin;

use App\Reports;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use PDF;

class TransactionLogsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

   public function index()
   {

       $getreports =['status' => 'Done'];

       $reports = Reports::where($getreports)->get();
       return view ('Admin.TransactionLogs', compact('reports'));
   }

   public function fullTransactionPDF(){


       $getreports =['status' => 'Done'];

       $reports = Reports::where($getreports)
                  ->get();
       
       
       //$pdf = PDF::loadView('Admin.FullTransactionPDF', compact('reports'));

       dd($report);
       //return $pdf->download('TransactionLog.pdf'); //Add date sa loob ng pagdownlaod
 
     }

     function showTransaction($ID) {
       $reports = Reports::find($ID);
       return view('Admin.ShowTransaction', compact('reports'));
     }

     function singleTransactionPDF($ID){

        $getadminid = Auth::user();
        $getid = $getadminid->id;

       $report = Reports::find($ID);

       $partner = ['id' => $report->partner ];
       $getpartnerdetails = User::where($partner)
                            ->get()
                            ->first();
       $motorist = ['id' => $report->userID];
       $getmotoristdetails = User::where($motorist)
                            ->get()
                            ->first();
        $assistant = ['id' => $report->assistant];
       $getassistantdetails = User::where($assistant)
                                ->get()
                                ->first();

        $getcar = ['UserID' => $report->userID];
        $getcardetails = DB::table ('cars')
                        ->where($getcar)
                        ->get()
                        ->first();

        $getpayment = ['ReportID' => $ID];
        $getpaymentdetails = DB::table ('payments')
                            ->where($getpayment)
                            ->get()
                            ->first();

       //dd($getpaymentdetails);
       $pdf = PDF::loadView('Admin.SingleTransactionPDF', 
                compact('report', 'getpartnerdetails', 
                'getmotoristdetails', 'getassistantdetails',
                'getcardetails', 'getpaymentdetails'));
       
       DB::table('user_logs')
            ->insert(['UserID' => $getid, 
                      'Type' => "Download Transaction", 
                      'ReportsID' => $ID, 
                      'Description' => "Downloaded Transaction Log Successfully"]);
       
       return $pdf->download('SingleTransactionLog.pdf');
     }

     function ExamplePDF($ID){

        $getadminid = Auth::user();
        $getid = $getadminid->id;
        
        $report = Reports::find($ID);

        $partner = ['id' => $report->partner ];
        $getpartnerdetails = User::where($partner)
                            ->get()
                            ->first();
        $motorist = ['id' => $report->userID];
        $getmotoristdetails = User::where($motorist)
                            ->get()
                            ->first();
        $assistant = ['id' => $report->assistant];
        $getassistantdetails = User::where($assistant)
                            ->get()
                            ->first();
        $getcar = ['UserID' => $report->userID];
        $getcardetails = DB::table ('cars')
                        ->where($getcar)
                        ->get()
                        ->first();

        $getpayment = ['ReportID' =>$ID];
        $getpaymentdetails = DB::table ('payments')
                            ->where($getpayment)
                            ->get()
                            ->first();

        //($getpaymentdetails);
        return view ('Admin.SingleTransactionPDF', 
                    compact('report', 'getpartnerdetails', 
                    'getmotoristdetails', 'getassistantdetails', 
                    'getcardetails', 'getpaymentdetails'));
    }
}

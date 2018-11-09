<?php

namespace App\Http\Controllers\Web\PartnerCompany;

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
        $this->middleware('auth:partner');
    }

    public function index(){
        
        $getpartner = Auth::user();
        $partner = $getpartner->id;

        $getreports =['partner' => $partner];

        $done = ['status', 'Done'];
        $ongoing = ['status', 'Ongoing'];
        $assigned = ['status', 'Assigned'];
        $declined = ['status', 'Declined'];
        $sentreport = ['status', 'Sent Report'];

        $status = [$done, $ongoing, $assigned, $declined, $sentreport];

        $reports = Reports::where($getreports)
                   ->orWhere($status)
                   ->get();
                   
        return view ('Partner.TransactionLogs', compact('reports'));
    }

    function showTransaction($ID) {
        $reports = Reports::find($ID);

        $getmotorist = ['id' => $reports->userID];
        $motorist = User::where($getmotorist)
                        ->get()
                        ->first();

        $getassistant = ['id' => $reports->assistant];
        $assistant = User::where($getassistant)
                        ->get()
                        ->first();

        $getcar = ['UserID' => $reports->userID];
        $car = DB::table ('cars')
                        ->where($getcar)
                        ->get()
                        ->first();

        $getpayment = ['ReportID' => $ID];
        $payment = DB::table ('payments')
                            ->where($getpayment)
                            ->get()
                            ->first();
        
                            
        return view('Partner.ShowTransaction', compact('reports', 'motorist', 'assistant', 'car', 'payment'));
    }


      
    function singleTransactionPDF($ID){        
        $report = Reports::find($ID);

        $getpartner = Auth::user();
        $partner = ['id' => $getpartner->id ];
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

        // dd($getpartnerdetails);
        $pdf = PDF::loadView('Partner.SingleTransactionPDF', 
                    compact('report', 'getpartnerdetails', 
                    'getmotoristdetails', 'getassistantdetails',
                    'getcardetails', 'getpaymentdetails'));

        DB::table('user_logs')
            ->insert(['UserID' => $getpartner->id, 
            'Type' => "Download Transaction", 'ReportsID' => $ID, 
            'Description' => "Downloaded Transaction Log Successfully"]);

        return $pdf->download('SingleTransactionLog.pdf'); 
    }
}

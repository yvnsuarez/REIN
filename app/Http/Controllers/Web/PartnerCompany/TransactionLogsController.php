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
use Illuminate\Support\Carbon;


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
                   ->with('user')
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

        $getcar = ['ID' => $reports->CarID];
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
        $getcar = ['ID' => $report->CarID];
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

    public function fullTransactionPDF(Request $request)
    {

       date_default_timezone_set('Asia/Manila');
       $start = Carbon::parse($request->start)->startOfDay();
       $end = Carbon::parse($request->end)->endOfDay();

       $reports = Reports::with('user')
                         ->whereBetween('DateSubmitted', array(new Carbon($start), new Carbon($end)))
                         ->get();
       $reportcount = Reports::with('user')
                           ->whereBetween('DateSubmitted', array(new Carbon($start), new Carbon($end)))
                           ->count();

       if ($reportcount == 0){
           return redirect()->action('Web\PartnerCompany\TransactionLogsController@index');
       } else {
         $pdf = PDF::loadView('Partner.FullTransactionPDF', 
         compact('reports'));
       }
           
       return $pdf->download('FullTransactionPDF.pdf');
    }
}

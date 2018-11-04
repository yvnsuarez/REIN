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
    //

    public function __construct()
     {
         $this->middleware('auth:partner');
     }

    public function index()
    {
        $getpartner = Auth::user();
        $partner = $getpartner->id;

        $getreports =['partner' => $partner];

        $done = ['status', 'Done'];
        $ongoing = ['status', 'Ongoing'];
        $assigned = ['status', 'Assigned'];
        $status = [$done, $ongoing, $assigned];

        $reports = Reports::where($getreports)
                   ->orWhere($status)
                   ->get();
        return view ('Partner.TransactionLogs', compact('reports'));
    }

    public function fullTransactionPDF(){

        $getpartner = Auth::user();
        $partner = $getpartner->id;

        $getreports =['partner' => $partner];

        $done = ['status', 'Done'];
        $ongoing = ['status', 'Ongoing'];
        $assigned = ['status', 'Assigned'];
        $status = [$done, $ongoing, $assigned];

        $reports = Reports::where($getreports)
                   ->orWhere($status)
                   ->get();

        dd($reports);
        $pdf = PDF::loadView('Partner.FullTransactionPDF', compact('reports', 'partner'));
        return $pdf->download('TransactionLog.pdf'); //Add date sa loob ng pagdownlaod
  
      }

      function showTransaction($ID) {
        $reports = Reports::find($ID);
        return view('Partner.ShowTransaction', compact('reports'));
      }

      function singleTransactionPDF($ID){

        $getadminid = Auth::user();
        $getid = $getadminid->id;
        
        $report = Reports::find($ID);

        $getpartner = Auth::user();
        $partner = ['id' => $getpartner->id ];
        $getpartnerdetails = User::where($partner)->get()->first();
        $motorist = ['id' => $report->userID];
        $getmotoristdetails = User::where($motorist)->get()->first();
        $assistant = ['id' => $report->assistant];
        $getassistantdetails = User::where($assistant)->get()->first();

        $getdetails = [$getpartnerdetails, $getmotoristdetails, $getassistantdetails];

        // dd($getpartnerdetails);
        $pdf = PDF::loadView('Partner.SingleTransactionPDF', compact('report', 'getpartnerdetails', 'getmotoristdetails', 'getassistantdetails'));
        
        DB::table('user_logs')
            ->insert(['UserID' => $getid, 'Type' => "DownloadPDF", 'ReportsID' => $ID, 'Description' => "Downloaded Transaction Log Successfully"]);
       
        return $pdf->download('SingleTransactionLog.pdf');
      }
}

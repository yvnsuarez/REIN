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
use Illuminate\Support\Carbon;

class TransactionLogsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

   public function index()
   {
       $reports = Reports::with('user')
                        ->get();
        // dd($reports);
       return view ('Admin.TransactionLogs', compact('reports'));
   }

    function showTransaction($ID) {
        $reports = Reports::find($ID);

        $getpartner = ['id' => $reports->partner];
        $partner = User::where($getpartner)
                        ->get()
                        ->first();
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
        $cartype = DB::table('cartype')
                        ->where('id', '=', $car->carTypeID )
                        ->get()
                        ->first();
        $carbrand = DB::table('brand')
                        ->where('id' , '=',  $car->brandID)
                        ->get()
                        ->first();
        $getpayment = ['ReportID' => $ID];
        $payment = DB::table ('payments')
                            ->where($getpayment)
                            ->get()
                            ->first();
       return view('Admin.ShowTransaction', compact('reports', 'partner', 'motorist', 'assistant', 'car', 'cartype', 'carbrand', 'payment'));
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

        $getcar = ['ID' => $report->CarID];
        $getcardetails = DB::table ('cars')
                        ->where($getcar)
                        ->get()
                        ->first();

        $cartype = DB::table('cartype')
                            ->where('id', '=', $getcardetails->carTypeID )
                            ->get()
                            ->first();

        $carbrand = DB::table('brand')
                            ->where('id' , '=',  $getcardetails->brandID)
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
                'getcardetails','cartype', 'carbrand', 'getpaymentdetails'));
       
       DB::table('user_logs')
            ->insert(['UserID' => $getid, 
                      'Type' => "Download Transaction", 
                      'ReportsID' => $ID, 
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
            return redirect()->action('Web\Admin\TransactionLogsController@index');
        } else {
          $pdf = PDF::loadView('Admin.FullTransactionPDF', 
          compact('reports'));
        }
            
        return $pdf->download('FullTransactionPDF.pdf');
     }
}

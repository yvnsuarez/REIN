<?php

namespace App\Http\Controllers\Web\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\UserLogs;
use Illuminate\Support\Carbon;

class UserActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth:admin');
     }

    public function index()
    {
        $userlogs = UserLogs::with('user')
                    ->get();

        // dd($userlogs);
        date_default_timezone_set('Asia/Manila');
        $start = Carbon::now();
        $end = Carbon::now();

        return view('Admin.UserActivity',compact('userlogs', 'start', 'end'));
    }

    public function daterange(Request $request)
    {

        date_default_timezone_set('Asia/Manila');
        $start = Carbon::parse($request->start)->startOfDay();
        $end = Carbon::parse($request->end)->endOfDay();

        $userlogs = DB::table('user_logs')
                    ->whereBetween('Date', array(new Carbon($start), new Carbon($end)))
                    ->with('user')
                    ->get();
        return view('Admin.UserActivity',compact('userlogs', 'start', 'end'));
    }

    function showUserActivity($ID) {

        $userlogs = DB::table('user_logs')
                    ->where('ID',$ID)
                    ->get()
                    ->first();

        $getuserid = ['id' => $userlogs->UserID];
        $causer = DB::table('users')
                        ->where($getuserid)
                        ->get()
                        ->first();
        $gettargetuser = ['id' => $userlogs->TargetUser];
        $targetuser = DB::table('users')
                            ->where($gettargetuser)
                            ->get()
                            ->first();
        $getreport = ['ID' => $userlogs->ReportsID];
        $report = DB::table('reports')
                        ->where($getreport)
                        ->get()
                        ->first();
        // $getfeedback = ['reportID' => $report->ID];
        // $feedback = DB::table('feedbacks')
        //                 ->where($getfeedback)
        //                 ->get()
        //                 ->first();
        $getpayment = ['ID' => $userlogs->PaymentsID];
        $payment = DB::table('payments')
                        ->where($getpayment)
                        ->get()
                        ->first();

        return view('Admin.ShowUserActivity', 
                compact('userlogs', 'causer', 'targetuser',
                        'report',  'payment')); //'feedback',
      }
      



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

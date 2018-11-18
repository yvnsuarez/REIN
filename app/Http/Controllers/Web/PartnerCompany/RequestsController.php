<?php

namespace App\Http\Controllers\Web\PartnerCompany;

use App\Http\Controllers\Controller;
use App\Reports;
use App\User;
use Auth;
use DB;
use FCM;
use Illuminate\Http\Request;
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;

class RequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function __construct()
     {
         $this->middleware('auth:partner');
     }

    public function index()
    {
        $getpartner = Auth::user();
        $partner = $getpartner->id;

        $pending = ['status' => 'Pending'];
        $accepted = ['status' => 'Pending', 'partner' => $partner];
        $assigned = ['status' => 'Assigned'];
        $ongoing = ['status' => 'Ongoing'];
        $done = ['status' => 'Done'];
        $declined = ['status' => 'Declined'];

        $notstatus =[$assigned, $ongoing, $done, $declined];

        $reports = DB::table('reports')
                        ->where($pending)
                        ->orWhere($accepted)
                        ->WhereNotIn('status', $notstatus)
                        ->get();    

        
        // $getmotorist = ['id' => $reports->userID];
        // // $motorists = DB::table('users')
        // //                 ->where($getmotorist)
        // //                 ->get();
        // dd($getmotorist);
        return view ('Partner.Requests', compact('reports')); //, 'motorists'
    }

    /**s
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
    public function showaccept($ID)
    {
        $reports = Reports::find($ID);

        $getmotoristdetails = ['id' => $reports->userID];
        $motorist = User::where($getmotoristdetails)->get()->first();

        $getcar = ['ID' => $reports->CarID];
        $car = DB::table ('cars')
                        ->where($getcar)
                        ->get()
                        ->first();

        return view('Partner.AcceptRequest', compact('reports', 'motorist', 'car'));
    }

    public function accept($ID)
    {
        $getpartner = Auth::user();
        

        DB::table('reports')
          ->where('id', $ID)
          ->update(['status' => "Accepted", 'partner' => $getpartner->id]);

        $report = Reports::find($ID);
        DB::table('user_logs')
          ->insert(['UserID' => $getpartner->id, 'Type' => "Accepted",'ReportsID' => $ID, 'TargetUser' => $report->userID,'Description' => "Request Accepted"]);
        
          return redirect('partner/requests');
       // return redirect()->intended(route('partner.requests'));//->with('message', 'Request has been accepted successfully'));
    }

    public function showassign($ID)
    {


        
        $getpartner = Auth::user();
        $partner = $getpartner->id;
        $getassistant = ['PartnerCompany' => $partner, 'UserTypeID' => '2', 'AssignStatus' => 'Available', 'Status' => 'Activated'];

        $reports = Reports::find($ID);
        $users = User::where($getassistant)->get();
        

        $getmotoristdetails = ['id' => $reports->userID];
        $motorist = User::where($getmotoristdetails)->get()->first();

        $getcar = ['ID' => $reports->CarID];
        $car = DB::table ('cars')
                        ->where($getcar)
                        ->get()
                        ->first();
        // dd($car);
        return view('Partner.AssignRequest', compact('reports', 'users', 'motorist', 'car'));
    }

    public function assign(Request $request, $id)
    {

        $getpartner = Auth::user();
        $partner = $getpartner->id;
        $assistant = $request->input('assistant');
        DB::table('reports')
            ->where('id', $id)
            ->update(['status' => "Assigned", 'assistant' => $assistant]);

        DB::table('users')
            ->where('id', $assistant)
            ->update(['AssignStatus' => "Not Available"]);

        // DB::table('user_logs')
        //   ->save([])

        DB::table('user_logs')
            ->insert(['UserID' => $partner, 'Type' => "Assigned", 'TargetUser' => $assistant, 'ReportsID' => $id, 'Description' => "Request Assigned"]);

        $optionBuilder = new OptionsBuilder();
        $optionBuilder->setTimeToLive(60 * 20);

        $notificationBuilder = new PayloadNotificationBuilder('Assigned Task');
        $notificationBuilder->setBody('Please go to the service site immediately')
            ->setSound('default');

        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData(['status' => 'Assigned', 'id' => $id]);

        $option = $optionBuilder->build();
        $notification = $notificationBuilder->build();
        $data = $dataBuilder->build();

        $report = Reports::find($id);
        $UserFCMToken = User::find($report->userID);
        $UserFCMToken2 = User::find($report->assistant);
        //   dd($UserFCMToken);
        $downstreamResponse = FCM::sendTo($UserFCMToken->token, $option, $notification, $data);
        $downstreamResponse = FCM::sendTo($UserFCMToken2->token, $option, $notification, $data);

        return redirect('partner/requests');
        //return redirect()->intended(route('partner.requests'))->with('message','item has been updated successfully');
    }
    
    public function showdecline($ID)
    {
        $reports = Reports::find($ID);

        $getmotoristdetails = ['id' => $reports->userID];
        $motorist = User::where($getmotoristdetails)->get()->first();

        $getcar = ['ID' => $reports->CarID];
        $car = DB::table ('cars')
                        ->where($getcar)
                        ->get()
                        ->first();

        return view('Partner.DeclineRequest', compact('reports', 'motorist', 'car'));

    }

    public function decline($ID)
    {
        $getpartner = Auth::user();

        DB::table('reports')
          ->where('id', $ID)
          ->update(['status' => "Declined", 'partner' => $getpartner->id]);

        $report = Reports::find($ID);
        DB::table('user_logs')
          ->insert(['UserID' => $getpartner->id, 'Type' => "Declined",'ReportsID' => $ID, 'TargetUser' => $report->userID,'Description' => "Request Declined"]);

        return redirect('partner/requests');  
    }

    public function destroy($id)
    {
        
    }
}

<?php

namespace App\Http\Controllers\Web\PartnerCompany;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reports;
use App\User;
use Auth;
use App\Partner;
use DB;
use REIN\Http\Controllers\PartnerCompanyController;

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
        $ongoing = [ 'status' => 'Ongoing'];
        $done = ['status' => 'Done'];

        $notstatus =[$assigned, $ongoing, $done];

        $reports = Reports::where($pending)
                            ->orWhere($accepted)
                            ->WhereNotIn('status', $notstatus)
                            ->get();

        return view ('Partner.Requests', compact('reports'));
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
        return view('Partner.AcceptRequest', compact('reports'));
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

        return view('Partner.AssignRequest', compact('reports', 'users'));
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
        ->insert(['UserID' => $partner, 'Type' => "Assigned", 'TargetUser' => $assistant,'ReportsID' => $id,'Description' => "Request Assigned"]);
        return redirect('partner/requests');
        //return redirect()->intended(route('partner.requests'))->with('message','item has been updated successfully');
    }
    
    public function showdecline($ID)
    {
        $getpartner = Auth::user();
        $partner = $getpartner->id;

        $reports = Reports::find($ID);

        DB::table('user_logs')
        ->insert(['UserID' => $partner, 
                  'Type' => "Declined", 
                  'ReportsID' => $ID,
                  'Description' => "Request Declined"]);
        return view('Partner.DeclineRequest', compact('reports'));

    }

    public function decline($ID)
    {
        // DB::table('reports')
        //   ->where('id', $ID)
        //   ->update(['status' => "Declined"]);

        return redirect('partner/requests');  
    }

    public function destroy($id)
    {
        
    }
}

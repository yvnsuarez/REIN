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
        // $reports = Reports::where('status', 'Accepted')->get();
        $reports = Reports::where('status', 'Pending')->get();
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

        return redirect('partner/requests');
       // return redirect()->intended(route('partner.requests'));//->with('message', 'Request has been accepted successfully'));
    }

    public function showassign($ID)
    {
        
        $reports = Reports::find($ID);
        $users = User::where('UserTypeID', '2')->get();
        return view('Partner.AssignRequest', compact('reports', 'users'));
        // /)->with(['users' => $users]);
        //, compact('reports')
    }

    public function assign(Request $request, $id)
    {
        $getassistant = $request->input('assistant');
        DB::table('reports')
          ->where('id', $id)
          ->update(['status' => "Assigned", 'assistant' => $getassistant]);
          
        return redirect('partner/requests');
        //return redirect()->intended(route('partner.requests'))->with('message','item has been updated successfully');
    }
    
    public function showdecline($ID)
    {
        $reports = Reports::find($ID);
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

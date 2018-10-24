<?php

namespace App\Http\Controllers\Web\PartnerCompany;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reports;
use App\User;

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
        $reports = Reports::all();
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

    public function accept(Request $requests, $ID)
    {
        Reports::find($ID)->update($requests->all());
        // $user->update($request->all());
        return redirect()->intended(route('partner.requests'));
        // return redirect()->route('Partner.Requests')->with('message','item has been updated successfully');
    }

    public function showassign($ID)
    {
        $reports = Reports::find($ID);
        return view('Partner.AssignRequest', compact('reports'));
    }

    public function assign(Request $requests, $ID)
    {

        Reports::find($ID)->update($requests->all());
        // $user->update($request->all());
        return redirect()->intended(route('partner.requests'));//->with('message','item has been updated successfully');
    }
    
    public function showdecline($ID)
    {
        $reports = Reports::find($ID);
        return view('Partner.DeclineRequest', compact('reports'));
    }

    public function decline(Request $requests, $ID)
    {
        Reports::find($ID)->update($requests->all());
        // $user->update($request->all());
        return redirect()->route('Partner.Requests')->with('message','item has been updated successfully');
    }

    public function destroy($id)
    {
        
    }
}

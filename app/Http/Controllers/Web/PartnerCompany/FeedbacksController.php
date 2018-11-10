<?php

namespace App\Http\Controllers\Web\PartnerCompany;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Feedbacks;
use App\User;
use App\Reports;
use Auth;

class FeedbacksController extends Controller
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

        $getreportpartner =['partner' => $partner];
        
        $reports = Reports::where($getreportpartner)
                   ->get()->first();

        $feedbackreport = ['reportID' => $reports->ID];

        //Display feedbacks based on transactions made by the logged in partner company
        $feedbacks = DB::table('feedbacks')
                    ->where('reportID', )
                    ->get();

        return view ('Partner.Feedbacks', compact('feedbacks'));
    }

    function showFeedback($ID) {

        $getpartner = Auth::user();
        $partner = $getpartner->id;

        $getreportpartner =['partner' => $partner];

        $reports = Reports::where($getreportpartner)
                   ->get()
                   ->first();

        $feedbackreport = ['reportID' => $reports->ID];

        $getmotorist = ['id' => $reports->userID];
        $motorist = User::where($getmotorist)
                        ->get()
                        ->first();

        $getassistant = ['id' => $reports->assistant];
        $assistant = User::where($getassistant)->get()->first();

        $getreport = ['ID' => $feedbackreport];
        $report = DB::table('reports')
                    ->where($getreport)
                    ->get()
                    ->first();

        $feedbacks = DB::table('feedbacks')
                    ->where('ID',$ID)
                    ->get()
                    ->first();
        return view('Partner.ShowFeedback', compact('feedbacks', 'motorist', 'report', 'assistant'));
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
        $feedback = Feedbacks::find($id);
        return view('feedbacks.show', compact('feedback'));
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

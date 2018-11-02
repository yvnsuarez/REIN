<?php

namespace App\Http\Controllers\Web\PartnerCompany;

use App\Reports;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use PDF;

class LogsController extends Controller
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

        $getreports =['partner' => $partner, 'status' => 'Done'];

        $reports = Reports::where($getreports)->get();
        return view ('Partner.TransactionLogs', compact('reports'));
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
    // public function show($id)
    // {
    //     $reports = Reports::find($id);
    //     return view('reports.show', compact('reports'));
    // }

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

    public function fullTransactionPDF(){

        $getpartner = Auth::user();
        $partner = $getpartner->id;

        $getreports =['partner' => $partner, 'status' => 'Done'];

        $reports = Reports::where($getreports)
                   ->get();

        $pdf = PDF::loadView('FullTransactionPDF', compact('reports'));
        return view ('Partner.FullTransactionPDF');
        //return $pdf->download('TransactionLog.pdf'); //Add date sa loob ng pagdownlaod
  
      }
}

<?php

namespace App\Http\Controllers\API;


use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\Feedbacks; 
use Illuminate\Support\Facades\Auth; 
use Validator;


class FeedbacksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $records = Feedbacks::all();
        if(count($records)> 0){
            return Feedbacks::all();
        }else{


        return response()->json("No Records Found");
    }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     */

    public function store(Request $request)
    {
       
            $validator = Validator::make($request->all(), [
                'reportID',
                 'review' => 'required',
                 'DateSubmitted',
            ]);
            if ($validator->fails()) { 
                return response()->json(['error'=>$validator->errors()], 401);            
            }
    $input = $request->all();
            $feedbacks = Feedbacks::create($input); 
            
    return response()->json("Success",200); 
        }

   
    
  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if (Auth::check()) {
            $results = Feedbacks::find($request);
            return $results;
        }
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

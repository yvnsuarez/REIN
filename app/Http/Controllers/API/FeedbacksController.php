<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

class feedbackscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $records = feedbacks::all();
        if(count($records)> 0){
            return feedbacks::all();
        }else{


        return response()->json("No Records Found");
    }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $validator = Validator::make($request->all(), [
                'Feedback' => 'required',
                'DateSubmitted' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 401);
            }

            return response()->json($allergies, 201);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

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

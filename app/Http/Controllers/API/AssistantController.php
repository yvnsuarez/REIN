<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

class assistantscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $records = assistants::all();
        if(count($records)> 0){
            return assistants::all();
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
                'FirstName' => 'required|max:250|string',
                'LastName' => 'required|max:250',
                'MobileNo' => 'required|max:11',
                'Birthday' => 'required',
                'Address' => 'required|max:100',
                'City' => 'required|max:100',
                'ZipCode' => 'required',
                'Email' => 'required|email',
                'Password' => 'required|max:100',
                'Status',
                'DateCreated',
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
            $results = Assistant::find($request);
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

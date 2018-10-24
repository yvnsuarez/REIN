<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

class carscontroller extends Controller
{
    public function index()
    {
        //
          $records = cars::all();
        if(count($records)> 0){
            return cars::all();
        }else{


        return response()->json("No Records Found");
    }
    }
    public function store(Request $request)
        {
            if (Auth::check()) {
                $validator = Validator::make($request->all(), [
                    'CarID' ,
                    'PlateNo' => 'required',
                    'CarType' => 'required',
                    'Color' => 'required',
                    'Model' => 'required|max:100',
                    'YearModel' => 'required|max:100',
                    'Brand' => 'required|max:100',
                    'Battery' => 'required|max:100',
                    'Tire' => 'required|max:100',
                    'DateCreated' => 'required|max:100',
                ]);
                if ($validator->fails()) {
                    return response()->json(['error' => $validator->errors()], 401);
                }
    
                return response()->json($allergies, 201);
            } else {
                return response()->json(['error' => 'Unauthorized'], 401);
            }
    
        }


    public function show(Request $request)
    {
        if (Auth::check()) {
            $results = Cars::find($request);
            return $results;
        }
    }
}

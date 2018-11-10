<?php

namespace app\Http\Controllers\API;

use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Auth;
use App\Car; 
use Validator;


class CarsController extends Controller
{
    
    public function index()
    {
        //
          $records = Car::all();
        if(count($records)> 0){
            return Car::all();
        }else{


        return response()->json("No Records Found");
    }
    }
    public function store(Request $request)
        {
           
                $validator = Validator::make($request->all(), [
                        'userID',
                        'PlateNo' => 'required',
                        'CarType' => 'required',
                        'Color' => 'required',
                        'Model' => 'required|max:100',
                        'YearModel' => 'required|max:100',
                        'Brand' => 'required|max:100',
                        'Battery' => 'required|max:100',
                        'Tire' => 'required|max:100',
                        'DateCreated',
                ]);
                if ($validator->fails()) { 
                    return response()->json(['error'=>$validator->errors()], 401);            
                }
        $input = $request->all();
                $cars = Car::create($input); 
                
        return response()->json($cars,200); 
            }
        

    public function show(Request $request)
    {   
        if (Auth::check()) {
            $results = Car::find($request);
            return $results;
        }
    }
}


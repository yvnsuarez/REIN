<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\Motorist; 
use Illuminate\Support\Facades\Auth; 
use Validator;

class Motoristcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $records = motorists::all();
        if(count($records)> 0){
            return motorists::all();
        }else{


        return response()->json("asd");
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
        //
         $results = motorists::find($request);
        return $results;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    //       $validators = Validator::make($request->all(), [
    //         'LastName' => 'required|max:250',
    //         'FirstName' => 'required|max:250',
    //         'MobileNo' => 'required|max:100',
    //         'Birthday' => 'required|max:100',
    //         'Address' => 'required|max:100',
    //         'City' => 'required|max:100',
    //         'ZipCode' => 'required|max:100',
    //         'Email' => 'required|max:100',
    //         'Password' => 'requirmax:100',
    //         'Status' => 'required|max:100',
    //         'DateCreated' => 'required',

    //     ]);

    //    $validators = Validator::make($request->all(), $rules);

    //     if ($validator-> fails()){

    //         return $this->respondValidationError('Fields Validation Failed.', $validator->errors()); {
            
    //     }
    // }
//}

    public function login(){ 
        $password = bcrypt(request('Password'));
        if(Motorist::where('Email', request('Email'))){ 
            $user = Auth::Motorist(); 
            $success['token'] =  $user->createToken('Rein')-> accessToken; 
            return response()->json(['success' => $success], 200); 
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }
/** 
     * Register api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function register(Request $request) 
    { 
        $validator = Validator::make($request->all(), [ 
            'CarID', 
            'LastName' ,
            'FirstName', 
            'MobileNo',
            'BirthDay',
            'Address',
            'City',
            'ZipCode',
            'Email',
            'Password',
            'CPassword' => 'same:Password',
            'Status',
            'DateCreated'
        ]);
if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
$input = $request->all();
$input['Password'] = bcrypt($input['Password']);
        $user = Motorist::create($input); 
        $success['token'] =  $user->createToken('Rein')-> accessToken; 
return response()->json(['success'=>$success], 200); 
    }


}

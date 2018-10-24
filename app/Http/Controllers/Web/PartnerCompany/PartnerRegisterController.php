<?php

namespace App\Http\Controllers\Web\PartnerCompany;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Hash;

class PartnerRegisterController extends Controller
{
     //

    public function register(Request $request) {
        $validator = Validator::make($request->all(), [ 
            
            'FirstName' => 'required' ,
            'LastName' => 'required' ,
            'Email' => 'required',
            'password' => 'required|min:6',
            'CPassword' => 'same:password',
            'remember_token',
            // 'Status',
            // 'DateCreated'
            
        
        ]);
        
        // if ($validator->fails()) { 
        //             return response()->to(['error'=>$validator->errors()], 401);            
        // }

        $input = $request->all();   
        $partner = new User($input);
        $partner->password = Hash::make($input['password']);
        $partner->UserTypeID = 4;
        $partner->Status = 'Activated';

        if($partner->save()){
            return view('Partner.home'); 
        } else {
            return "{Error: failed insert}";
        }
    }
}

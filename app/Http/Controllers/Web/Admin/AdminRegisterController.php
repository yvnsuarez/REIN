<?php

namespace App\Http\Controllers\Web\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Hash;
class AdminRegisterController extends Controller
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
        $admin = new User($input);
        $admin->password = Hash::make($input['password']);
        $admin->UserTypeID = 1;
        $admin->Status = 'Activated';

        if($admin->save()){ 
            return view('admin.dashboard'); 
        } else {
            return "{Error: failed insert}";
        }
    }
    
}

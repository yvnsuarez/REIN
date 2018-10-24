<?php

namespace App\Http\Controllers\Web\PartnerCompany;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AddAssistantController extends Controller
{
    //
    public function index() {
        return view ('partnerCompany.AddAssistant');
    }

    public function register(Request $request) {
        $validator = Validator::make($request->all(), [ 
            
            'FirstName' => 'required' ,
            'LastName' => 'required' ,
            'MobileNo' => 'required',
            'Birthday' => 'required',
            'Address' => 'required', 
            'City' => 'required',
            'ZipCode' => 'required',
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
        $assistant = new User($input);
        $assistant->Password = bcrypt($input['Password']);
        //$user = users::create($input); 
        $assistant->UserTypeID = 3;
        $assistant->Status = 'Not Verified';

        if($assistant->save()){
            return view('partnerCompany.Assistants'); 
        } else {
            return "{Error: failed insert}";
        }
    }
}

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
    public function index() 
    {
        $gettype = ['UserTypeID' => 1];

        $users = DB::table('users')
                    ->where($gettype)
                    ->get()
                    ->count();
        if ($users == '1'){
        return view('Admin.Register');
        } else {
            return view('admin-auth.admin-login');
        }
    }

    public function register(Request $request) {
        $this->validate($request, [

            'FirstName' => 'required|max:250|regex:/^[a-zA-Z-. ]*$/' ,
            'LastName' => 'required|max:250|regex:/^[a-zA-Z-. ]*$/' ,
            'Email' => 'required|max:250|unique:users|email',
            'password' => 'required|min:6|max:250|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{6,})/',
            'CPassword' => 'same:password|required',
            'g-recaptcha-response' => 'required|captcha',
        ],
        [
            'FirstName.required' => 'Please input your Firstname.' ,
            'FirstName.max' => 'Your firstname input exceeds the maximum length.' ,
            'FirstName.regex' => 'Your firstname input is invalid.' ,
            'LastName.required' =>  'Please input your Lastname.' ,
            'LastName.max' => 'Your lastname input exceeds the maximum length.' ,
            'LastName.regex' => 'Your lastname input is invalid.' ,
            'Email.required' => 'Please input your email address',
            'Email.max' => 'Your email address input exceeds the maximum length.',
            'Email.unique' => 'This email is already taken',
            'Email.regex' => 'Your email address input is invalid.',
            'Email' => 'Your email input is invalid.',
            'password.required' => 'Please input a password.',
            'password.min' => 'Your password input is too short.',
            'password.max' => 'Your password input exceeds the maximum length.',
            'password.regex' => 'Your password input must contain at least one uppercase, lowercase, numerical, and special character.',
            'CPassword.same' => 'Your password input should match.',
            'CPassword.required' => 'Your password input a password.',
        ]);
        

        
        // if ($validator->fails()) { 
        //     return response()->to(['error'=>$validator->errors()], 401);            
        // }
        
        $input = $request->all();   
        $admin = new User($input);
        $admin->password = bcrypt($input['password']);
        $admin->UserTypeID = 1;
        $admin->Status = 'Activated';

        if($admin->save()){
            
            //user logs insert
            $getadminid = Auth::user();
            $getid = $getadminid->id;

            DB::table('user_logs')
            ->insert(['UserID' => $getid, 'Type' => "Admin Registration", 'Description' => "Registered an Admin Account Successfully"]);

            return view('landingPage'); 
        } 
    }
    
}

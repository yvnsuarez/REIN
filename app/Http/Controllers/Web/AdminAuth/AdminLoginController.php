<?php

namespace App\Http\Controllers\Web\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\UserLogs;


class AdminLoginController extends Controller
{

    public function __construct()
    {
     $this->middleware('guest:admin', ['except' => ['adminLogout']], 'auth:admin');   
    }

    public function showLoginform()
    {
        return view('admin-auth.admin-login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'Email' => 'required',
            'password' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        if (Auth::guard('admin')->attempt(['Email' => $request->Email,
        'password' => $request->password, 'UserTypeID' => '1']))
        {

            $getemail = ['Email' => 'Email'];
            $gettype = ['UserTypeID' => '1'];

            $getdata = [$getemail, $gettype];

            $getid = DB::table('users')
                        ->where($getdata)
                        ->get()
                        ->first();

            DB::table('user_logs')
            ->insert(['UserID' => $getid->id, 'Type' => "Login", 'Description' => "Logged in successfully"]);

            return redirect()->intended(route('admin.home'));
            
        }
        
        else {
            
            $errmsg = "Email or Password is Invalid";
            return redirect()->back()->with('failure', $errmsg);
            //return view('login/loginAdmin', compact('errmsg'));
        }
    }

    public function adminLogout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login')->with(Auth::logout());
        
    }


    
}

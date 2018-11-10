<?php

namespace App\Http\Controllers\Web\PartnerAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class PartnerLoginController extends Controller
{
    public function __construct()
    {
     $this->middleware('guest:partner', ['except' => ['partnerLogout']]);   
    }

    public function showLoginform()
    {
        return view('partner-auth.partner-login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [ 
            'Email' => 'required',
            'password' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        if (Auth::guard('partner')->attempt(['Email' => $request->Email,
        'password' => $request->password,  'UserTypeID' => '4']))//, 'UserTypeID' => '4'
        {

            $getemail = ['Email' => $request->Email];
           // $gettype = ['UserTypeID' => '4'];
            $getid = DB::table('users')
                        ->where($getemail)
                        ->get()
                        ->first();
                        
            DB::table('user_logs')
            ->insert(['UserID' => $getid->id, 'Type' => "Login", 'Description' => "Logged in successfully"]);

            return redirect()->intended(route('partner.dashboard'));
        } 
        else {

            $errmsg = "Email or Password is Invalid";
            return redirect()->back()->with('failure', $errmsg);
            //return view('login/loginAdmin', compact('errmsg'));
        }
    }

    public function partnerLogout()
    {
        $getid = Auth::user();

        DB::table('user_logs')
        ->insert(['UserID' => $getid->id, 'Type' => "Logout", 'Description' => "Logged out successfully"]);

        Auth::guard('partner')->logout();
        return redirect('/partner/login')->with(Auth::logout());
    }

}
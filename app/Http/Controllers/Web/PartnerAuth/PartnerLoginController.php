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
        'password' => $request->password, ], $request->remember))
        {
            return redirect()->intended(route('partner.dashboard'));
        }
        
        return redirect()->back()->withInput($request->only('Email', 'password'));
    }

    public function partnerLogout()
    {
        Auth::guard('partner')->logout();
        return redirect('/partner/login')->with(Auth::logout());
    }

}
<?php

namespace App\Http\Controllers\Web\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class AdminLoginController extends Controller
{

    public function __construct()
    {
     $this->middleware('guest:admin', ['except' => ['adminLogout']]);   
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
        ]);

        if (Auth::guard('admin')->attempt(['Email' => $request->Email,
        'password' => $request->password]))
        {
            return redirect()->intended(route('admin.home'));
        }
        
        return redirect()->back()->withInput($request->only('Email', 'password'));
    }

    public function adminLogout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login')->with(Auth::logout());
        
    }


    
}

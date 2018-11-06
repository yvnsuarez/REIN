<?php

namespace App\Http\Controllers\Web\PartnerAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Notifications\PartnerResetPasswordNotification;
use Password;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:partner');
    }

    public function showLinkRequestForm()
    {
       return view('partner-auth.passwords.email');
    }

    protected function broker() 
    {
        return Password::broker('partners');
    }
}

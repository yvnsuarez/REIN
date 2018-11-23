<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\DB; 
use Validator;
use Mail;
use App\User;
class MailController extends Controller
{
    
    public function html_email(Request $request){
        
        $email = $request->Email;
        $random = str_random(8);
        // dd($random);
        $flight = User::where('Email', $email)->update(["code" => $random]);
            // $flight->code = $random;
            // $flight->save();
        Mail::send('Mail', ["data" => $request, "rand" => $random], function($message) use ($email) {
            
            $message->to($email,$email)->subject
              ('Verification');
           $message->from('rein.inquiry@gmail.com','REIN APP');
        });
        return response()->json(["Email" => "Hello"], 201);
     }
     
     public function verify (Request $request){
       $user =  User::where("code", $request->id)->get();
        
        if($user->count() != 0)
        $flight = User::where('code',$request->id)->update(["code" => "", "Status" => "Activated"]);

        return view("verified");
     }  
}

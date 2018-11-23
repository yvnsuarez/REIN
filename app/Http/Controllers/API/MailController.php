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

        //PASSING DATA TO VIEW
       // $getusers = User::all(); //Get all users for partner and assistant detials

        //Gets and checks the same email from the request to the email in the database
        // $getemail = [$email, 'Email']; 
        // $user = DB::table('users') 
        //                 ->where($getemail)
        //                 ->get()
        //                 ->first();

        // Gets the 
        // $getreport = [$user->id, 'userID'];
        // $reportdetails = DB::table('reports')
        //                         ->where($getreport)
        //                         ->get()
        //                         ->first();

        //get the partner details of the report made
        // $getpartner = ['partner', $getusers->id];
        // $partner = DB::table('reports')
        //                         ->where($getpartner)
        //                         ->get()
        //                         ->first();

        //gets the assistant detail of the report made
        // $getassistant = ['assistant', $getusers->id];
        // $assistant = DB::table('reports')
        //                         ->where($getassistant)
        //                         ->get()
        //                         ->first();

        Mail::send('Mail', ["data" => $request, "rand" => $random], function($message) use ($email) { //'reportdetails', 'partner', 'assistant'
            
            $message->to($email,$email)->subject
              ('Verification');
           $message->from('rein.inquiry@gmail.com','REIN APP');
        });
        return response()->json(["Email" => "Hello"], 201);
     }
     
     public function receipt_email(Request $request){
        
        $email = $request->Email;
        $random = str_random(8);
        // dd($random);
        $flight = User::where('Email', $email)->update(["code" => $random]);
            // $flight->code = $random;
            // $flight->save();
        Mail::send('Receipt', ["data" => $request, "rand" => $random, ''], function($message) use ($email) {
            
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

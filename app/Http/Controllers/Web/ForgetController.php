<?php 
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Validator;

class ForgetController extends Controller
{
    public function index(Request $request)
    {
        $flight = User::where("code", $request->id)->get()->count();
        if($flight == 0){
            return abort(404);
        }else{
            return view('forgetpassword')->with('id', $request->id);
        }
    }

    public function forgetpassword(Request $request){
        $validator = Validator::make($request->all(),[
            'Email' => 'required|email|exist:user,Email',
            'Password' => 'required|string',
            'CPass' => 'required|string|same:Password',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }
        $flight = User::where('code', $request->id)
        ->where('Email', $request->Email)
        ->update(["password" => bcrypt($request->password),"code"=>null]);

        return view('home');
        //return view('landingPage');
    }
}
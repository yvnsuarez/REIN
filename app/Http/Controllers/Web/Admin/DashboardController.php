<?php

namespace App\Http\Controllers\Web\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Lcobucci\JWT\Parser;
use Validator;
use App\Report;
use App\User;
use App\Feedbacks;

class HomeController extends Controller
{
    public function index() {
        //Admin Login View
        return view('Admin.home');
    }

    public function login() {
        return view('Admin.login');
    }

    public function dashboard(){
    	$pending = DB::table('reports')->where('status', 'Pending')->count();
    	$accepted = DB::table('reports')->where('status', 'Accepted')->count();
    	$ongoing = DB::table('reports')->where('status', 'Ongoing')->count();
    	$done = DB::table('reports')->where('status', 'Done')->count();
    	$repSuspended = DB::table('users')->where('Status', 'Suspended')->count();
    	$repPending = DB::table('users')->where('Status', 'Pending')->count();
    	$repActivated = DB::table('users')->where('Status', 'Activated')->count();
    	$repDeactivated = DB::table('users')->where('Status', 'Deactivated')->count();
    	$dead = DB::table('reports')->where('servicetype', 2)->count();
    	$flat = DB::table('reports')->where('servicetype', 1)->count();
    	$tow = DB::table('reports')->where('servicetype', 3)->count();
    	$sum = DB::table('reports')->where('status', 'Done')->sum('totalservice');
        return view('admin.Home', ['pending' => $pending, 'accepted' => $accepted, 'ongoing' => $ongoing, 'done' => $done, 
        	'repSuspended' => $repSuspended, 'repPending' => $repPending, 'repActivated' => $repActivated, 'repDeactivated' => $repDeactivated,
        	'flat' => $flat, 'dead' => $dead, 'tow' => $tow, 'sum' => $sum]);
    }

    public function ViewReports()
    {
        $details = Report::all(); //->where('UserTypeID', '=', 2)
        if(count($details)> 0){
            return view('admin/Reports', ['details' => $details]);
        }else{
        return response()->json("No Records Found");
        }
    }
    public function ViewMotorists(){
        $users = User::where('UserTypeId', '=', 3)->get(); //->where('UserTypeID', '=', 2)
        return view ('admin.Motorists', compact('users'));
    }

    public function landing(){
        return view('PartnerCompany.LandingPage');
    }

    public function partnerhome(){
        return view('PartnerCompany.Home');
    }

    public function reports(){
        $details = Report::all();
        if(count($details)> 0){
            return view('PartnerCompany/Reports', ['details' => $details]);
        }else{
        return response()->json("No Records Found");
        }
    }
    
    public function assistants() {
        $users = User::where('UserTypeID', '=', 2)->get();
        return view ('PartnerCompany.Assistants', compact('users'));
    }

    public function feedbacks() {
        $feedbacks = Feedbacks::all();
        return view ('PartnerCompany.Feedbacks', compact('feedbacks'));
    }
}

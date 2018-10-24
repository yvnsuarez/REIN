<?php

namespace App\Http\Controllers\Web;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class WebAdminController extends Controller
{
    
    public function index() {
        //Admin Login View
        return view('admin.Login');
    }
    
    public function home() {
        //Admin Home (Dashboard) View
        return view('admin.Home');
    }

    
    public function partners() {
        //list of partners get method
        return view('admin.Partners');
    }

    public function viewPartners(){
        //List of Partners View post method

    }

    public function partnerProfile() {
        //Profile of Partners View get method
        return view ('admin.ViewPartner');
    }

    public function viewPartnerProfile() {
        //Profile of Partners View post method
        
    }

    public function add() {
        //Register Partner View
        return view ('admin.AddPartner');
    }

    public function addPartner(Request $request) {

        //Register Partner

        $validator = Validator::make($request->all(), [ 
            
            'BusinessName' => 'required' ,
            'Address' => 'required', 
            'City' => 'required',
            'ZipCode' => 'required',
            'BusinessRegistrationNo' => 'required' ,
            'LTFRBRegistrationNo' => 'required',
            'MobileNo' => 'required',
            'Email' => 'required',
            'password' => 'required|min:6',
            'CPassword' => 'same:password',
            // 'Status',
            'DateCreated'
            
        
        ]);
        
        if ($validator->fails()) { 
                    return response()->to(['error'=>$validator->errors()], 401);            
        }
        
        $input = $request->all();
        $partnercompany = new User($input);
        $partnercompany->Password = bcrypt($input['Password']);
        //$user = users::create($input); 
        $partnercompany->UserTypeID = 2;

        if($admin->save()){
        return view('admin.Partners'); 
        } else {
            return "{Error: failed insert}";
        }
    }

     
    public function updatePartner() {
        //Update or Suspend a Partner Account View 
        return view ('admin.UpdatePartner');
    }


    public function logs() {
        //Tranaction Logs View 
        return view ('admin.TransactionLogs');
    }


    public function motorists() {
        //List of Motorists View 
        return view ('admin.Motorists');
    }


    public function updateMotorist() {
        //Suspend Pprofile of Motorists View 
        return view ('admin.UpdateMotorist');
    }


    public function motoristProfile() {
        //Profile of Motorists View 
        return view ('admin.ViewMotorist');
    }





    //AdminRegister
    public function register(Request $request) 
    { 

        return view('admin.AdminRegister');
    }

    public function addAdmin(Request $request) 
    { 

        
        $validator = Validator::make($request->all(), [ 
            
            'FirstName' => 'required' ,
            'LastName' => 'required', 
            'Email' => 'required|',
            'password' => 'required|min:6',
            'CPassword' => 'same:password',
            
        
        ]);
        
        if ($validator->fails()) { 
                    return response()->to(['error'=>$validator->errors()], 401);            
        }
        
        $input = $request->all();
        $admin = new User($input);
        $admin->password = bcrypt($input['password']);
        //$user = users::create($input); 
        $admin->UserTypeID = 1;

        if($admin->save()){
        return view('admin.Home'); 
        } else {
            return "{Error: failed insert}";
        }
    }

    public function login(Request $request){
        $Credentials = ['Email' => request('Email'), 'Password' => request('Password'),];
        $Password = bcrypt(request('Password'));
        if(User::where('Email', request('Email'), ('Password' ) )){ 
            return view ('admin.Home'); 
        } 
        else { 
            return 'Login Failed'; 
        } 
    }

   
}

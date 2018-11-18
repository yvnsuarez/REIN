<?php

namespace App\Http\Controllers\Web\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function __construct()
     {
         $this->middleware('auth:admin');
     }
     
    public function index()
    {
        $users = User::where('UserTypeID', '=', 4)
                ->get();
        return view ('partners.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // User::create($request->all());
        // return redirect()->route('partners.index')->with('message','partner has been added successfully');

    
        $this->validate($request, [

            'BusinessName' => 'required|max:250|regex:/^[a-zA-Z-. ]*$/',
            'Address' => 'required|regex:/^[a-zA-Z-. 0-9]*$/',
            'City' => 'required|max:100|regex:/^[a-zA-Z-. ]*$/',
            'ZipCode' => 'required|max:4|regex:/^[0-9]*$/',
            'BusinessRegistrationNo' => 'required|max:250|regex:/^[0-9]*$/' ,
            'LTFRBRegistrationNo' => 'required|max:250|regex:/^[0-9]*$/',
            'MobileNo' => 'required|max:11|regex:/^[0-9]*$/',
            'Email' => 'required|max:250|unique:users|',
            'password' => 'required|min:6|max:250|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{6,})/',
            'CPassword' => 'same:password|required',
            'g-recaptcha-response' => 'required|captcha',
        ],[
            'BusinessName.required' => 'Please input your Business Name' ,
            'BusinessName.max' => 'Your BusinessName input exceeds the maximum length.' ,
            'BusinessName.regex' => 'Your BusinessName input is invalid.' ,
            'Address.required' => 'Please input your Address',
            'Address.regex' => 'Your Address input is invalid.' ,
            'City.required' => 'Please input your City ',
            'City.max' => 'Your city input exceeds the maximum length.',
            'City.regex' => 'Please input a valid city',
            'ZipCode.required' => 'Please input your Zip Code',
            'ZipCode.max' => 'Your zip code input exceeds the maximum length.',
            'ZipCode.regex' => 'Your zip code input is invalid.',
            'BusinessRegistrationNo.required' => 'Please input your Business Registration Number' ,
            'BusinessRegistrationNo.max' => 'Your Business Registration Number input exceeds the maximum length.' ,
            'BusinessRegistrationNo.regex' => 'Your Business Registration Number input is invalid.' ,
            'LTFRBRegistrationNo.required' => 'Please input your LTFRB Accreditation Number',
            'LTFRBRegistrationNo.max' => 'Your LTFRB Accreditation Number input exceeds the maximum length.' ,
            'LTFRBRegistrationNo.regex' => 'Your LTFRB Accreditation Number input is invalid.' ,
            'MobileNo.required' => 'Please input your Mobile Number',
            'MobileNo.max' => 'Please input a valid Mobile Number.',
            'MobileNo.regex' => 'Please input a valid Mobile Number.',
            'Email.required' => 'Please input your Email',
            'Email.max' => 'Your email input exceeds the maximum length',
            'Email.unique' => 'This email is already taken',
            'password.required' => 'Please input a Password',
            'password.max' => 'Your Password input exceeds the maximum length.',
            'password.regex' => 'Your Password input must contain at least one uppercase, lowercase, numerical, and special character.',
            'CPassword.required' => 'Please input a Password',
            'CPassword.same' => 'Your password input should match.',
        ]);
        
        $input = $request->all();   
        $partnercompany = new User($input);
        $partnercompany->password = bcrypt($input['password']);
        $partnercompany->UserTypeID = 4;
        $partnercompany->Status = 'Activated'; //verify email


        if($partnercompany->save()){
            
            //user logs insert
            $getadminid = Auth::user();
            $getid = $getadminid->id;

            DB::table('user_logs')
            ->insert(['UserID' => $getid, 'Type' => "Partner Registration", 'Description' => "Registered Partner Company's Account Successfully"]);

            return redirect()->route('partners.index')->with('message','partner has been added successfully'); 
        } 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request){

    }
    

    public function show($id)
    {
        $user = User::find($id);
        return view('partners.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('partners.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'BusinessName' => 'required|max:250|regex:/^[a-zA-Z-. ]*$/',
            'Address' => 'required|regex:/^[a-zA-Z-. 0-9]*$/',
            'City' => 'required|max:100|regex:/^[a-zA-Z-. ]*$/',
            'ZipCode' => 'required|max:4|regex:/^[0-9]*$/',
            'BusinessRegistrationNo' => 'required|max:250|regex:/^[0-9]*$/' ,
            'LTFRBRegistrationNo' => 'required|max:250|regex:/^[0-9]*$/',
            'MobileNo' => 'required|max:11|regex:/^[0-9]*$/',
            'Email' => 'required|max:250|email',
            'g-recaptcha-response' => 'required|captcha',
        ],[
            'BusinessName.required' => 'Please input your Business Name' ,
            'BusinessName.max' => 'Your BusinessName input exceeds the maximum length.' ,
            'BusinessName.regex' => 'Your BusinessName input is invalid.' ,
            'Address.required' => 'Please input your Address',
            'Address.regex' => 'Your Address input is invalid.' ,
            'City.required' => 'Please input your City ',
            'City.max' => 'Your city input exceeds the maximum length.',
            'City.regex' => 'Please input a valid city',
            'ZipCode.required' => 'Please input your Zip Code',
            'ZipCode.max' => 'Your zip code input exceeds the maximum length.',
            'ZipCode.regex' => 'Your zip code input is invalid.',
            'BusinessRegistrationNo.required' => 'Please input your Business Registration Number' ,
            'BusinessRegistrationNo.max' => 'Your Business Registration Number input exceeds the maximum length.' ,
            'BusinessRegistrationNo.regex' => 'Your Business Registration Number input is invalid.' ,
            'LTFRBRegistrationNo.required' => 'Please input your LTFRB Accreditation Number',
            'LTFRBRegistrationNo.max' => 'Your LTFRB Accreditation Number input exceeds the maximum length.' ,
            'LTFRBRegistrationNo.regex' => 'Your LTFRB Accreditation Number input is invalid.' ,
            'MobileNo.required' => 'Please input your Mobile Number',
            'MobileNo.max' => 'Please input a valid Mobile Number.',
            'MobileNo.regex' => 'Please input a valid Mobile Number.',
            'Email.required' => 'Please input your Email',
            'Email' => 'Your email input is invalid',
        ]);
        User::find($id)->update($request->all());
        

        $getassistant = ['PartnerCompany' => $id];
        $assistant = DB::table('users')
                        ->where($getassistant)
                        ->update(['Status' => 'Deactivated']);
        
        $getadminid = Auth::user();
        $getid = $getadminid->id;

        DB::table('user_logs')
            ->insert(['UserID' => $getid, 'Type' => "Update Partner", 'TargetUser' => $id, 'Description' => "Updated Partner Company's Account Successfully"]);

        // $user->update($request->all());
        return redirect()->route('partners.index')->with('message','item has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}

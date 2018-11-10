<?php

namespace App\Http\Controllers\Web\PartnerCompany;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class AssistantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $table="datatables_data";

     public function __construct()
     {
         $this->middleware('auth:partner');
     }
 
    public function index()
    {
        
        $getpartner = Auth::user();
        $partner = $getpartner->id;

        $getuser = ['UserTypeID' => '2', 'PartnerCompany' => $partner];

        $users = User::where($getuser)->get();
        return view ('assistants.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assistants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'FirstName' => 'required|max:250|regex:/^[a-zA-Z-. ]*$/' ,
            'LastName' => 'required|max:250|regex:/^[a-zA-Z-. ]*$/' ,
            'MobileNo' => 'required|max:11|regex:/^[0-9]*$/',
            'BirthDay' => 'required|before:'. Carbon::now()->subYears(25),
            'Address' => 'required|regex:/^[a-zA-Z-. 0-9]*$/',
            'City' => 'required|max:100|regex:/^[a-zA-Z-. ]*$/',
            'ZipCode' => 'required|max:4|regex:/^[0-9]*$/',
            'Email' => 'required|max:250|unique:users|email',
            'password' => 'required|min:6|max:250|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{6,})/',
            'CPassword' => 'same:password|required',
            'g-recaptcha-response' => 'required|captcha',
        ],
        [
            'FirstName.required' => 'Please input your Firstname.' ,
            'FirstName.max' => 'Your firstname input exceeds the maximum length.' ,
            'FirstName.regex' => 'Your firstname input is invalid.' ,
            'LastName.required' =>  'Please input your Lastname.' ,
            'LastName.max' => 'Your lastname input exceeds the maximum length.' ,
            'LastName.regex' => 'Your lastname input is invalid.' ,
            'MobileNo.required' => 'Please input your mobile number.',
            'MobileNo.max' => 'Please input a valid mobile number.',
            'MobileNo.regex' => 'Please input a valid mobile number.',
            'BirthDay.required' => 'Please input your birthdate',
            'BirthDay.before' => 'You should be atleast 25 years old',
            'Address.required' => 'Please input your address.',
            'Address.regex' => 'You address input is invalid.',
            'City.required' => 'Please input your city.',
            'City.max' => 'Your city input exceeds the maximum length.',
            'City.regex' => 'Please input a valid city',
            'ZipCode.required' => 'Please input your zip code',
            'ZipCode.max' => 'Your zip code input exceeds the maximum length.',
            'ZipCode.regex' => 'Your zip code input is invalid.',
            'Email.required' => 'Please input your email address',
            'Email.max' => 'Your email address input exceeds the maximum length.',
            'Email.unique' => 'This email is already taken',
            'Email.regex' => 'Your email address input is invalid.',
            'Email' => 'Your email input is invalid.',
            'password.required' => 'Please input a password.',
            'password.min' => 'Your password input is too short.',
            'password.max' => 'Your password input exceeds the maximum length.',
            'password.regex' => 'Your password input must contain at least one uppercase, lowercase, numerical, and special character.',
            'CPassword.same' => 'Your password input should match.',
            'CPassword.required' => 'Your password input a password.',
        ]);

        $getpartner = Auth::user();
        $partner = $getpartner->id;

        $input = $request->all();
        $assistant = new User($input);
        $assistant->password = bcrypt($input['password']);
        $assistant->UserTypeID = 2;
        $assistant->Status = 'Activated'; //Verify email first before login
        $assistant->PartnerCompany = $partner;
        $assistant->AssignStatus = 'Available';
        

        if($assistant->save()){

            $getpartnerid = Auth::user();
            $getid = $getpartnerid->id;

        DB::table('user_logs')
            ->insert(['UserID' => $getid, 'Type' => "Assistant Registration", 'Description' => "Registered Assistant's Account Successfully"]);
            return redirect()->route('assistants.index')->with('message','assistant has been added successfully'); 
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('assistants.show', compact('user'));
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
        return view('assistants.edit', compact('user'));
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

            'MobileNo' => 'required|max:11|regex:/^[0-9]*$/',
            'Address' => 'required|regex:/^[a-zA-Z-. 0-9]*$/',
            'City' => 'required|max:100|regex:/^[a-zA-Z-. ]*$/',
            'ZipCode' => 'required|max:4|regex:/^[0-9]*$/',
            'Email' => 'required|max:250|email',
            'g-recaptcha-response' => 'required|captcha',
        ],
        [
            'MobileNo.required' => 'Please input your mobile number.',
            'MobileNo.max' => 'Please input a valid mobile number.',
            'MobileNo.regex' => 'Please input a valid mobile number.',
            'Address.required' => 'Please input your address.',
            'Address.regex' => 'You address input is invalid.',
            'City.required' => 'Please input your city.',
            'City.max' => 'Your city input exceeds the maximum length.',
            'City.regex' => 'Please input a valid city',
            'ZipCode.required' => 'Please input your zip code',
            'ZipCode.max' => 'Your zip code input exceeds the maximum length.',
            'ZipCode.regex' => 'Your zip code input is invalid.',
            'Email.required' => 'Please input your email address',
            'Email.max' => 'Your email address input exceeds the maximum length.',
            'Email.regex' => 'Your email address input is invalid.',
            'Email' => 'Your email input is invalid.',
        ]);
        
        $assistants = User::find($id);
        $assistants->MobileNo = $request->input('MobileNo');
        $assistants->Address = $request->input('Address');
        $assistants->City= $request->input('City');
        $assistants->ZipCode = $request->input('ZipCode');
        $assistants->Email = $request->input('Email');
        $assistants->Status = $request->input('Status');
        $assistants->update();

        $getpartnerid = Auth::user();
        $getid = $getpartnerid->id;

        DB::table('user_logs')
            ->insert(['UserID' => $getid, 'Type' => "Update Assistant", 'Description' => "Updated Assistant's Account Successfully", 'TargetUser' => $id]);
        // $user->update($request->all());
        return redirect()->route('assistants.index')->with('message','item has been updated successfully');
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

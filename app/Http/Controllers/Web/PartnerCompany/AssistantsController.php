<?php

namespace App\Http\Controllers\Web\PartnerCompany;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class AssistantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


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
        $validator = Validator::make($request->all(), [ 
            
            'FirstName' => 'required' ,
            'LastName' => 'required' ,
            'MobileNo' => 'required',
            'BirthDay' => 'required',
            'Address' => 'required', 
            'City' => 'required',
            'ZipCode' => 'required',
            'Email' => 'required',
            'password' => 'required|min:6',
            'CPassword' => 'same:password',
            'g-recaptcha-response' => 'required|captcha',
            'remember_token',
            // 'Status',
            // 'DateCreated'
            
        
        ]);
        
        // if ($validator->fails()) { 
        //             return response()->to(['error'=>$validator->errors()], 401);            
        // }
        $getpartner = Auth::user();
        $partner = $getpartner->id;

        $input = $request->all(); 

        $assistant = new User($input);
        $assistant->Password = bcrypt($input['Password']);
        //$user = users::create($input); 
        $assistant->UserTypeID = 2;
        $assistant->Status = 'Not Verified';
        $assistant->PartnerCompany = $partner;
        $assistant->AssignStatus = 'Available'; //To be changed if only the status has been verified but for now Available muna.
        // $assistant->BusinessName = '';
        

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

        $validator = Validator::make($request->all(), [ 
            
            'FirstName' => 'required' ,
            'LastName' => 'required' ,
            'MobileNo' => 'required',
            'BirthDay' => 'required',
            'Address' => 'required', 
            'City' => 'required',
            'ZipCode' => 'required',
            'Email' => 'required',
            'password' => 'required|min:6',
            'CPassword' => 'same:password',
            'g-recaptcha-response' => 'required|captcha',
            'remember_token',
            // 'Status',
            // 'DateCreated'
                
        ]);
        
        User::find($id)->update($request->all());

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

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
                ->get();//where statement=UserId
                //->paginate(10); 
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
            'remember_token',
            'Status',
            // 'DateCreated'
            
        
        ]);

        
        // if ($validator->fails()) { 
        //     return response()->to(['error'=>$validator->errors()], 401);            
        // }
        
        $input = $request->all();   
        $partnercompany = new User($input);
        $partnercompany->Password = bcrypt($input['Password']);
        //$user = users::create($input); 
        $partnercompany->UserTypeID = 4;
        $partnercompany->Status = 'Activated';


        if($partnercompany->save()){
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
        User::find($id)->update($request->all());
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

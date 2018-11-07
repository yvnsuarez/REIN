<?php

namespace App\Http\Controllers\Web\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Hash;

class AdminFunctionController extends Controller
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
        $users = User::where('UserTypeID', '=', 1)
                ->get();
        return view ('adminfunction.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminfunction.create');
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
            'Email' => 'required',
            'password' => 'required|min:6',
            'CPassword' => 'same:password',
            'g-recaptcha-response' => 'required|captcha',
            'remember_token',
            // 'DateCreated'
            
        
        ]);

        
        // if ($validator->fails()) { 
        //     return response()->to(['error'=>$validator->errors()], 401);            
        // }
        
        $input = $request->all();   
        $admin = new User($input);
        $admin->Password = bcrypt($input['Password']);
        //$user = users::create($input); 
        $admin->UserTypeID = 1;
        $admin->Status = 'Activated';


        if($admin->save()){
            
            //user logs insert
            $getadminid = Auth::user();
            $getid = $getadminid->id;

            DB::table('user_logs')
            ->insert(['UserID' => $getid, 'Type' => "Admin Registration", 'Description' => "Registered an Admin Account Successfully"]);

            return redirect()->route('adminfunction.index'); 
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
        return view('adminfunction.show', compact('user'));
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
        return view('adminfunction.edit', compact('user'));
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
            'Email' => 'required',
            'password' => 'required|min:6',
            'CPassword' => 'same:password',
            'g-recaptcha-response' => 'required|captcha',
            'remember_token',
            // 'DateCreated'
        
        ]);

        User::find($id)->update($request->all());
        
        $getadminid = Auth::user();
        $getid = $getadminid->id;

        DB::table('user_logs')
            ->insert(['UserID' => $getid, 'Type' => "Update Admin", 'TargetUser' => $id, 'Description' => "Updated Admin's Account Successfully"]);
        // $user->update($request->all());
        return redirect()->route('adminfunction.index');
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

<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\User; 
use Illuminate\Support\Facades\Auth; 
use Validator;


class UserController extends Controller 
{
public $successStatus = 200;
/** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function login(){ 
         
        if(Auth::attempt(['Email' => request('Email'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('Rein')-> accessToken; 
            return response()->json(['success' => $success], 200); 
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }
/** 
     * Register api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function register(Request $request) 
    { 
        $validator = Validator::make($request->all(), [ 
            'CarID' => 'required', 
            'LastName' => 'required' ,
            'FirstName' => 'required', 
            'MobileNo' => 'required|digits:11',
            'BirthDay' => 'required',
            'Address' => 'required',
            'City' => 'required',
            'ZipCode' => 'required',
            'Email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'CPassword' => 'same:password',
            'Status',
            'DateCreated'
        ]);
if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
$input = $request->all();
$input['password'] = bcrypt($input['password']);
        $user = user::create($input); 
        $success['token'] =  $user->createToken('Rein')-> accessToken; 
return response()->json(['success'=>$success], 200); 
    }

/** 
     * details api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function details() 
    { 
        $user = Auth::user(); 
        return response()->json(['success' => $user], $this-> successStatus); 
    } 
}
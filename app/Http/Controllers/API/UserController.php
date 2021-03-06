<?php
namespace app\Http\Controllers\API;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\User; 
use Illuminate\Support\Facades\Auth; 
use Validator;
use Mail;
use App\Reports;
use App\Car;



class UserController extends Controller 
{
public $successStatus = 200;
/** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function login() {
        $Credentials = ['Email' => request('Email'), 'password' => request('password'), 'Status' => 'Activated', 'UserTypeID' => request('UserTypeID')];
        $authenticate = Auth::attempt($Credentials);
        if ($authenticate) {
            $accesstoken = request('accesstoken');
            $user = Auth::user();

            $usertype = request('UserTypeID');
            if ($usertype == 2) {
                $success['token'] = $user->createToken($accesstoken, ['assistant'])->accessToken;
            }
            else {
                $success['token'] = $user->createToken($accesstoken, ['motorist'])->accessToken;
            }
            return response()->json(["id" => $user->id ,"token" => $success['token']], 200); 
        } else {
            return response()->json(['error' => 'Email or Password is Invalid / Account is not Authenticated'], 401);
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
            
            'UserTypeID' => 'required',
            'CarID' ,
            'LastName' => 'required' ,
            'FirstName' => 'required', 
            'MobileNo',
            'BirthDay' => 'required',
            'Address' => 'required',
            'City' => 'required',
            'ZipCode' => 'required',
            'Email' => 'required|email|unique:users,Email',
            'password' => 'required|min:6',
            'CPassword' => 'same:password',
            'Status',
            'DateCreated', 
        ]);
if ($validator->fails()) { 
            return response()->json(array('Email'=>$validator->getmessageBag()->first()), 412);            
        }
    $input = $request->all(); 
    $input['password'] = bcrypt($input['password']);
    $input['Status'] = "Pending";
    $date = strtotime($input['BirthDay']);
    $input['BirthDay'] = date('Y-m-d', $date);
        $user = user::create($input);
        $success['token'] =  $user->createToken('Rein')->accessToken; 
        $this->html_email($input['Email']);
        return response()->json(["id" => 200], 200); 


}

/** 
     * details api 
     * 
     * @return \Illuminate\Http\Response 
     */ 

    public function ViewCar(Request $request)
    {
        $car = Car::where("userID", $request->userID)->get();
        if($car)
        {

        return response()->json($car->all(),200);
        }
        else
        {
        return response()->json("ERROR",200);
        }                       
    }

    public function details() 
    { 
        $user = Auth::user(); 
        return response()->json(['success' => $user], $this-> successStatus); 
    } 

    public function send(Request $request){
        $user = User::where('id',$request->id)->update(["token" => $request->token]);

        if($user)
        {
            return response()->json(["Status" => "true"], 200);
        }
        else
        {
            return response()->json(["Status" => "false"], 401);
        }
    }

    public function sendforget(Request $request)
    {
        $email = $request->Email;
        $random = str_random(25);
        $flight = User::where('Email', $email)->update(["code" => $random]);

        Mail::send('forgetmail', ["data" => $request, "rand" => $random], function ($message) use ($email){

            $message->to($email, $email)->subject   
            ('Forget Password');
            $message->from('rein.inquiry@gmail.com', 'REIN APP');
        });
        return response()->json(["Email"=>$email], 201);

    }
    public function html_email($email){
        
     
        $random = str_random(8);
        // dd($random);
        $flight = User::where('Email', $email)->update(["code" => $random]);
            // $flight->code = $random;
            // $flight->save();
        Mail::send('Mail', ["data" => $email, "rand" => $random], function($message) use ($email) {
            
            $message->to($email,$email)->subject
              ('Verification');
           $message->from('rein.inquiry@gmail.com','REIN APP');
        });
        return response()->json(["Email" => "Hello"], 201);
     }
   
   
     public function html_email1(Request $request){
        
        $input = $request->all();
      
        $email = $input['Email'];
        Mail::send('Receipt', ["UniqueID" => $input['UniqueID'],"servicetype" => $input['servicetype'], "totalservice" => $input['totalservice']], function($message) use ($email) {
            
            $message->to($email,$email)->subject
              ('Verification');
           $message->from('rein.inquiry@gmail.com','REIN APP');
        });
        return response()->json(["Email" => "Sent"], 200);
     }

     public function getuni(Request $request){

        $unique = Reports::select("UniqueID")->where("ID", $request->ID)->pluck("UniqueID");
        if($unique)
        {

        return response()->json($unique->all(),200);
        }
        else
        {
        return response()->json("ERROR",200);
        }                
     }

}
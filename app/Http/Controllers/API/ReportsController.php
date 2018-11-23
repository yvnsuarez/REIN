<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Auth;
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use FCM;
use App\Reports; 
use App\Brand; 
use App\Type; 
use Validator;
use App\Payments;

class reportscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Report::all();
      $report = Report::where("ID", request("ID"))->first();
      return response()->json(["servicetype" => $report->servicetype, "addcharge" => $report->addcharge, 
    "status" => $report->status,"totalservice" => $report->totalservice],200); 
    }
  
  


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
   
    {
        $random = rand(1000,10000);
        $inputall = $request->all();
        $inputall['UniqueID'] = $random;
        // dd($inputall);
            $validator = Validator::make($inputall, [
                'UniqueID' => 'unique:reports,UniqueID',
                'partner',
                'userID'  => 'required',
                'assistant',
                'instruction',
                'servicetype',    
                'image',
                'Lat' ,
                'Lon' ,
                'comment',
                'addcharge',
                'totalservice' => 'required',
                'status' => 'required',
                'DateSubmitted',
                'DateUpdated',
            ]); 
            if ($validator->fails()) { 
                return response()->json(['error'=>$validator->errors()], 401);            
            }
            $report = Reports::create($inputall); 
        //    dd($report);
    $input2 = $request->only(['PaymentType','Status']);
    // $input2['Status']=$input2['paymentStat'];
    $input2['ReportID']= $inputall['UniqueID'];
    // dd($input2);
    $payment = Payments::create($input2);


    return response()->json($report,200); 
        }

   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if (Auth::check()) {
            $results = Report::find($request);
            return $results;
        }
    }
   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            
            'servicetype',    
            'addcharge',
            'totalservice',
            'status',
            'DateUpdated',
        ]); 
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        
        $report = Report::where("ID", $request->ID)
           ->update([
            "status" => $request->status,
            "servicetype" => $request->servicetype,
            "addcharge" => $request->addcharge,
            "totalservice" => $request->totalservice]);

            
            return response()->json($report, 200);
            

    }

    public function updateStatus(Request $request)
    {
      
        $report = Reports::where("ID", $request->ID)
           ->update([
            "status"=>"Cancelled"]);

            return response()->json($report, 200);
            
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewupdate(Request $request)
    {
        $report = Report::where("ID", $request->ID)->first();
        return response()->json(["ID" => $report->ID,
            "servicetype" => $report->servicetype,
                                 "addcharge" => $report->addcharge, 
                                 "status" => $report->status,
                                 "totalservice" => $report->totalservice,
                                  "DateSubmitted" => $report->datesubmitted],200); 
    }

    public function notification(Request $request){
        $optionBuilder = new OptionsBuilder();
    $optionBuilder->setTimeToLive(60*20);
    
    $notificationBuilder = new PayloadNotificationBuilder('REIN APP');
    $notificationBuilder->setBody('CONFIRMED')
                    ->setSound('default');
    
    $dataBuilder = new PayloadDataBuilder();
    $dataBuilder->addData(['a_data' => 'my_data']);
    
    $option = $optionBuilder->build();
    $notification = $notificationBuilder->build();
    $data = $dataBuilder->build();
  
    
    
    $downstreamResponse = FCM::sendTo($request->token, $option, $notification, $data);
    
return response()->json(["numberSuccess"=>$downstreamResponse->numberSuccess(),"numberFailure"=>$downstreamResponse->numberFailure()],200);
    
    // return Array (key:token, value:errror) - in production you should remove from your databas
    }

    public function car(Request $request)
    {
        //
        $brand = Brand::all();
        if ($brand){
            return response()->json($brand, 200);
        } else {
            return response()->json(["SAD" => "No records found"], 500);
        }
    }
    public function type(Request $request)
    {
        //
        $brand = Type::all();
        if ($brand){
            return response()->json($brand, 200);
        } else {
            return response()->json(["SAD" => "No records found"], 500);
        }
    }
}


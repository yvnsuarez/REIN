<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Payments;
use App\Reports;
use FCM;
use Illuminate\Http\Request;
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use Validator;

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
            "status" => $report->status, "totalservice" => $report->totalservice], 200);
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
            'userID' => 'required',
            'instruction' => 'required',
            'servicetype' => 'required',
            'Lat' => 'required',
            'Lon' => 'required',
            'totalservice' => 'required',
            'status' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $input = $request->all();
        $report = Reports::create($input);

        $input2 = $request->only(['PaymentType', 'Status']);
        $input2['ReportId'] = $report->id;
        $payment = Payments::create($input2);

        if ($report && $payment) {
            return response()->json($report, 200);
        } else {
            return response()->json(['error' => 'Internal Server Error. Please try again later!'], 401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $results = Reports::join('users', 'reports.assistant', 'users.id')->find($request->id);
        return response()->json($results, 200);
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
            return response()->json(['error' => $validator->errors()], 401);
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
                "status" => "Cancelled"]);

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
            "DateSubmitted" => $report->datesubmitted], 200);
    }

    
    public function notification(Request $request)
    {
        $optionBuilder = new OptionsBuilder();
        $optionBuilder->setTimeToLive(60 * 20);

        $notificationBuilder = new PayloadNotificationBuilder('REIN APP');
        $notificationBuilder->setBody('MOTORIST CONFIRMED')
            ->setSound('default');

        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData(['status' => $request->status, 'id' => $request->id, 'amount' => $request->amount]);

        $option = $optionBuilder->build();
        $notification = $notificationBuilder->build();
        $data = $dataBuilder->build();

        $user = Reports::join('users', 'reports.assistant', 'users.id')->find($request->id);

        $downstreamResponse = FCM::sendTo($user->token, $option, $notification, $data);

        return response()->json(["numberSuccess" => $downstreamResponse->numberSuccess(), "numberFailure" => $downstreamResponse->numberFailure()], 200);

        // return Array (key:token, value:errror) - in production you should remove from your databas
    }
    public function notificationAssistant(Request $request)
    {
        $optionBuilder = new OptionsBuilder();
        $optionBuilder->setTimeToLive(60 * 20);

        $notificationBuilder = new PayloadNotificationBuilder('REIN APP');
        $notificationBuilder->setBody('CONFIRMED')
            ->setSound('default');

        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData(['status' => $request->status, 'id' => $request->id]);

        $option = $optionBuilder->build();
        $notification = $notificationBuilder->build();
        $data = $dataBuilder->build();

        $user = Reports::join('users', 'reports.userID', 'users.id')->find($request->id);
        // dd($user->token);
        $downstreamResponse = FCM::sendTo($user->token, $option, $notification, $data);

        return response()->json(["numberSuccess" => $downstreamResponse->numberSuccess(), "numberFailure" => $downstreamResponse->numberFailure()], 200);

        // return Array (key:token, value:errror) - in production you should remove from your databas
    }
}

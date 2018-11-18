<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Reports;
use Auth;
use Illuminate\Support\Carbon;

class PartnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:partner');
    }

    public function index() 
    {

        //Widgets
        $getpartner = Auth::user();
        $partner = $getpartner->id;

        $getassistant = ['PartnerCompany' => $partner, 'UserTypeID' => '2'];
        $assistant = DB::table('users')
                        ->where($getassistant)
                        ->count();

        $getavailable = ['AssignStatus' => 'Available', 'Status' => 'Activated', 'PartnerCompany' => $partner, 'UserTypeID' => '2'];  
        $availableassistant = DB::table('users')
                                ->where($getavailable)
                                ->count();

        $getnotavailable = ['AssignStatus' => 'Not Available', 'Status' => 'Activated', 'PartnerCompany' => $partner, 'UserTypeID' => '2'];
        $notavailableassistant = DB::table('users')
                                    ->where($getnotavailable)
                                    ->count();

        $getsales = ['partner' => $partner, 'status' => 'Done'];
        $totalsales = DB::table('reports')
                        ->where($getsales)
                        ->sum('totalservice');

        $getservices = ['partner' => $partner, 'status' => 'Done'];
        $totalservice = DB::table('reports')
                        ->where($getservices)
                        ->count();
                        

        $getongoing = ['partner' => $partner, 'status' => 'Ongoing'];
        $totalongoing = DB::table('reports')
                        ->where($getongoing)
                        ->count();

        date_default_timezone_set('Asia/Manila');
        $start = Carbon::now();
        $end = Carbon::now();

        //Pie Chart
        $pie = DB::table('reports')
                ->select(
                    DB::raw('servicetype as servicetype'),
                    DB::raw('count(*) as number'))
                ->where('partner', $getpartner->id)
                ->groupBy('servicetype')
                ->get();
            $piearray[] = ['ServiceType', 'Total'];
            foreach($pie as $key => $value)
            {
            $piearray[++$key] = [$value->servicetype, $value->number];
            }
        
        $bar = DB::table('reports')
            ->select(
                DB::raw('status as status'),
                DB::raw('count(*) as number'))
            ->where('partner', $getpartner->id)
            ->groupBy('status')
            ->get();
        $bararray[] = ['status', 'Total'];
        foreach($bar as $key => $value)
        {
        $bararray[++$key] = [$value->status, $value->number];
        }

        //dd($data);
        return view('Partner.home', 
                    compact('assistant', 'availableassistant', 'notavailableassistant', 
                            'totalsales', 'totalservice', 'totalongoing', 'start', 'end')) //, 'start', 'end'
                            ->with('servicetype', json_encode($piearray))
                            ->with('status', json_encode($bararray));
 
    }

    public function daterange(Request $request) 
    {

        //Widgets
        $getpartner = Auth::user();
        $partner = $getpartner->id;

        $getassistant = ['PartnerCompany' => $partner, 'UserTypeID' => '2'];
        $assistant = DB::table('users')
                        ->where($getassistant)
                        ->count();

        $getavailable = ['AssignStatus' => 'Available', 'Status' => 'Activated', 'PartnerCompany' => $partner, 'UserTypeID' => '2'];  
        $availableassistant = DB::table('users')
                                ->where($getavailable)
                                ->count();

        $getnotavailable = ['AssignStatus' => 'Not Available', 'Status' => 'Activated', 'PartnerCompany' => $partner, 'UserTypeID' => '2'];
        $notavailableassistant = DB::table('users')
                                    ->where($getnotavailable)
                                    ->count();

        $getsales = ['partner' => $partner, 'status' => 'Done'];
        $totalsales = DB::table('reports')
                        ->where($getsales)
                        ->sum('totalservice');

        $getservices = ['partner' => $partner, 'status' => 'Done'];
        $totalservice = DB::table('reports')
                        ->where($getservices)
                        ->count();
                        

        $getongoing = ['partner' => $partner, 'status' => 'Ongoing'];
        $totalongoing = DB::table('reports')
                        ->where($getongoing)
                        ->count();

        date_default_timezone_set('Asia/Manila');
        $start = Carbon::parse($request->start)->startOfDay();
        $end = Carbon::parse($request->end)->endOfDay();

        $pie = DB::table('reports')
            ->select(
                DB::raw('servicetype as servicetype'),
                DB::raw('count(*) as number'))
            ->where('partner', $getpartner->id)
            ->whereBetween('DateSubmitted', array(new Carbon($start), new Carbon($end)))
            ->groupBy('servicetype')
            ->get();
        $piearray[] = ['ServiceType', 'Total'];
        foreach($pie as $key => $value)
        {
        $piearray[++$key] = [$value->servicetype, $value->number];
        }
    
        $bar = DB::table('reports')
            ->select(
                DB::raw('status as status'),
                DB::raw('count(*) as total'))
            ->where('partner', $getpartner->id)
            ->whereBetween('DateSubmitted', array(new Carbon($start), new Carbon($end)))
            ->groupBy('status')
            ->get();
        $bararray[] = ['status', 'Total'];
        foreach($bar as $key => $value)
        {
        $bararray[++$key] = [$value->status, $value->total];
        }

        return view('Partner.home', 
                    compact('assistant', 'availableassistant', 'notavailableassistant', 
                            'totalsales', 'totalservice', 'totalongoing', 'start', 'end'))
                    ->with('servicetype', json_encode($piearray))
                    ->with('status', json_encode($bararray));
    }

    public function yay1()
    {
        dd($this->yay());
        return view("MAMA MO");
    }
    
    public function yay($id){
        $optionBuilder = new OptionsBuilder();
    $optionBuilder->setTimeToLive(60*20);
    
    $notificationBuilder = new PayloadNotificationBuilder('my title');
    $notificationBuilder->setBody('Hello world')
                    ->setSound('default');
    
    $dataBuilder = new PayloadDataBuilder();
    $dataBuilder->addData(['a_data' => 'my_data']);
    
    $option = $optionBuilder->build();
    $notification = $notificationBuilder->build();
    $data = $dataBuilder->build();
    $id = user::find($id)->first();
    // dd($id);
    $token = $id->token;
    
    $downstreamResponse = FCM::sendTo($token, $option, $notification, $data);
    
    $downstreamResponse->numberSuccess();
    $downstreamResponse->numberFailure();
    $downstreamResponse->numberModification();
    
    //return Array - you must remove all this tokens in your database
    $downstreamResponse->tokensToDelete();
    
    //return Array (key : oldToken, value : new token - you must change the token in your database )
    $downstreamResponse->tokensToModify();
    
    //return Array - you should try to resend the message to the tokens in the array
    $downstreamResponse->tokensToRetry();
    
    // return Array (key:token, value:errror) - in production you should remove from your databas
    }
}
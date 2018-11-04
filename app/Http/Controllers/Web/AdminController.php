<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index() 
    {
    // $services = DB::table('reports')
    //         ->select(
    //             DB::raw("year(created_at) as year"),
    //             DB::raw("count(servicetype = jumpstart) as jumpstart"),
    //             DB::raw("count(servicetype = tow) as tow")
    //         ->orderBy("created_at")
    //         ->groupBy(DB::raw("year(created_at)"))
    //         ->get();


    // $result[] = ['Year','Jumpstart', 'Tow'];
    // foreach ($services as $key => $value) {
    // $result[++$key] = [$value->year, (int)$value->jumpstart, (int)$value->tow, ];
    // }

    return view('Admin.dashboard');
       // ->with('services',json_encode($result));
    }
}

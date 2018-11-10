<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\user_types;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use FCM;

class user_typesController extends Controller
{
    public function index()
    {
        $records = user_types::all();
        if (count($records) > 0) {
            return user_types::all();
        } else {
            return response()->json("No records founds");
        }
    }

    public function show(user_types $user_types)
    {
        return $user_types;
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            $validator = Validator::make($request->all(), [
                'type' => 'required|max:25|string',
            ]);
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 401);
            }
            $input = $request->all();
            $user_types = user_types::create($input);

            return response()->json($user_types, 201);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }
    
}

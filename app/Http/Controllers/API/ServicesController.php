<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

class servicescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $requests = Requests::all(); //->where('UserTypeID', '=', 2)
            return view ('partnerCompany.Requests', compact('reports'));
        
    }
    //     //
    //       $records = services::all();
    //     if(count($records)> 0){
    //         return services::all();
    //     }else{


    //     return response()->json("No Records Found");
    // }
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $results = Service::find($request);
            return $results;
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
        if (Auth::check()) {
            $validator = Validator::make($request->all(), [
                'ServiceType' => 'required|max:25|string',
                'ServiceRate' => 'required|max:25',
            ]);
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 401);
            }
            $input = $request->all();
            $Services = Services::create($input);   

            return response()->json($Services, 201);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
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
        //
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

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reports extends Model

{
    protected $table = 'reports';
    protected $primaryKey = 'id';
    protected $fillable =[
        'ID','partner', 'userID','assistant','instruction','servicetype','image', 'Lat','Lon',
        'comment', 'addcharge', 'totalservice', 'totalservice', 'status', 'paymentstatus', 'created_at',
        'updated_at', 'CarID', 'UniqueID'
     ];
     public $timestamps = false;

     public function user()
     {
       return $this->belongsTo('App\User', 'userID');
     }

     public function partner()
     {
       return $this->belongsTo('App\User', 'partner');
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

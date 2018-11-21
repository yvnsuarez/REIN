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
        'updated_at', 'CarID'
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
} 

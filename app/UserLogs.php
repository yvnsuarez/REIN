<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLogs extends Model
{
    //
    protected $fillable =[
        'ID','Type', 'UserID', 'Description', 'TargetUser', 'ReportsID', 'PaymentsID', 'Date'
     ];

     public function user()
     {
       return $this->belongsTo('App\User', 'UserID');
     }
}

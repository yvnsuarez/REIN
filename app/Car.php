<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    public $timestamps = false;
    protected $fillable =[
    	'userID','PlateNo','CarType','Color','Model','YearModel','Brand','Battery','Tire',
    	'DateCreated'
     ];
}

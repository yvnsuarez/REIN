<?php

namespace REIN;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    //
    protected $fillable =[
    	'CarId','PlateNo','CarType','Color','Model','YearModel','Brand','Battery','Tire',
        'DateCreated'
     ];
}

<?php

namespace REIN;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    //
    protected $fillable =[
    	'CarId','PlateNo','TypeID','Color','Model','YearModel','BrandID','Battery','Tire',
        'DateCreated'
     ];


     
}

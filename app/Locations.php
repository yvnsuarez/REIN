<?php

namespace REIN;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    //
    protected $fillable =[
        'LocationId','UserId','Lat','Lon'
     ];
}

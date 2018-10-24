<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    //
    protected $fillable =[
        'id','Partner','Motorist','Assistant','Instruction','ServiceType','Image', 'Lat','Long',
        'ServiceStatus', 'ServiceComment', 'AdditionalCharge', 'TotalServicePrice', 'DateRequested',
        'DateUpdated',
     ];
}

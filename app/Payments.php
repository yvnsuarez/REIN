<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    //
    protected $fillable =[
        'PaymentId','UserId','ReportId','PaymentType','Status','DatePaid'
     ];
     public $timestamps = false;
}

<?php

namespace REIN;

use Illuminate\Database\Eloquent\Model;

class TransactionLogs extends Model
{
    //
    protected $fillable =[
        'TransactionLogId', 'RequestId', 'UserId','ReportID','PaymentId'
     ];
}

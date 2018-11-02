<?php

namespace REIN;

use Illuminate\Database\Eloquent\Model;

class UserLogs extends Model
{
    //
    protected $fillable =[
        'UserLogId','UserID', 'Type', 'ReportsID', 'Description','Date'
     ];
}

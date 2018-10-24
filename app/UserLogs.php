<?php

namespace REIN;

use Illuminate\Database\Eloquent\Model;

class UserLogs extends Model
{
    //
    protected $fillable =[
        'UserLogId','Type','UserId', 'Description','Date'
     ];
}

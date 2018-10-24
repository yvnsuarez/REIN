<?php

namespace REIN;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    //
    protected $fillable =[
        'RequestId','ServiceId','UserId','Instruction','ImageRef','LocationId','Status','DateSubmitted'

     ];
}

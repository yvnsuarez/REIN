<?php

namespace REIN;

use Illuminate\Database\Eloquent\Model;

class Complaints extends Model
{
    //
    protected $fillable =[
        'ComplaintsId','TransactionLogId','Complaint','DateSubmitted'
     ];
}

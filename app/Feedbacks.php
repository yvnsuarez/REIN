<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedbacks extends Model
{
    //
    protected $fillable =[
        'ID','reportID','review','DateSubmitted'
     ];

    
}

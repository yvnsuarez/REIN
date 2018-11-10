<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reports extends Model

{
    protected $table = 'reports';
    protected $primaryKey = 'id';
    protected $fillable =[
        'ID','userID','partner','motorist','assistant','instruction','servicetype','image', 'Lat','Lon',
        'comment', 'addcharge', 'totalservice', 'totalservice', 'status', 'paymentstatus', 'created_at',
        'updated_at', 'CarID'
     ];
     public $timestamps = false;
} 

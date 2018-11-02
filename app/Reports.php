<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reports extends Model

{
    protected $table = 'reports';
    protected $primaryKey = 'id';
    protected $fillable =[
        'ID','partner','motorist','assistant','instruction','servicetype','image', 'Lat','Long',
        'comment', 'addcharge', 'totalservice', 'totalservice', 'status', 'paymentstatus', 'created_at',
        'updated_at',
     ];
     public $timestamps = true;
}

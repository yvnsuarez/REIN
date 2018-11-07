<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'UserTypeId','FirstName','LastName','MobileNo','BirthDay','Address','City','ZipCode',
        'BusinessName', 'BusinessRegistrationNo','LTFRBRegistrationNo',
        'email','password','Status', 'email_verified_at', 'PartnerCompany', 'AssignStatus', 'DateCreated',
    ];

    public $timestamps = false;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

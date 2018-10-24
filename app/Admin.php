<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function setAttribute($key, $value)
    {
      $isRememberTokenAttribute = $key == $this->getRememberTokenName();
      if (!$isRememberTokenAttribute)
      {
        parent::setAttribute($key, $value);
      }
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * protected $fillable = [
     *   'name', 'email', 'password',
    * ];
     */ 

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     * protected $hidden = [
     *  'password', 'remember_token',
     * ];
     */
}

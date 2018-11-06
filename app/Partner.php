<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use App\Notifications\PartnerResetPasswordNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Partner extends Authenticatable
{
    use Notifiable;

    protected $guard = 'partner';
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = true;


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
    public function sendPasswordResetNotification($token)
    {
      $this->notify(new PartnerResetPasswordNotification($token));
    }
}

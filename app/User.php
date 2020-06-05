<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password','phone','is_active','permissions','token_device','facebook_id','google_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function patient()
    {  
      return $this->hasOne('App\Patient','ppatient_id');      
    }

    public function doctor()
    {  
      return $this->hasOne('App\Doctor','doctor_id');      
    }

    public function hospital()
    {  
      return $this->hasOne('App\Hospital');      
    }

    public function pharmacy()
    {  
      return $this->hasOne('App\Pharmacy\Pharmacy');      
    }

    public function lab()
    {  
      return $this->hasOne('App\Labs\Lab');      
    }
}

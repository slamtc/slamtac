<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable=['doctor_id','appointment','from','to','status','type','kind','days']; 

     protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function Smallreservation()
    {  
       return $this->hasMany('App\Smallreservation')->where('user_id',null);
    }


    public function Doctores_reservation()
    {  
       return $this->hasMany('App\Doctor\Doctores_reservation')->where('status',0);
    }
       
       
}

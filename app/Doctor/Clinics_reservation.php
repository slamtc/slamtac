<?php

namespace App\Doctor;

use Illuminate\Database\Eloquent\Model;

class Clinics_reservation extends Model
{
    protected $fillable=['clinic_id','appointment','from','to','status','type','kind','days']; 

     protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function Clinic()
    {  
       return $this->belongsTo('App\Clinic');
    }

    public function Smallreservation()
    {  
       return $this->hasMany('App\Smallreservation')->where('user_id',null);
    }



    public function Doctores_reservation()
    {  
       return $this->hasMany('App\Doctor\Clinics_booking')->where('status',0);
    }
       
       
}

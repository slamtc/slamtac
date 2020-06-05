<?php

namespace App\Doctor;

use Illuminate\Database\Eloquent\Model;

class Doctors_favorite extends Model
{
    protected $fillable=['user_id','doctor_id'];


  
    public function permissions()
    {  
       return $this->belongsTo('App\User', 'doctor_id' );
    }

    public function user()
    {  
       return $this->hasOne('App\Shared_table','user_id','doctor_id');  
    }

    public function city()
    {  
      return $this->belongsTo('App\City','city_id');     
    }

    public function AvgRating()
    {  
       return $this->hasMany('App\Review', 'doctor_id','doctors.id');
    }

    public function reservation()
    {  

      $today = date("Y-m-d");
        return $this->hasOne('App\Reservation', 'doctor_id')
                          ->where('appointment','>=',$today) 
                          ->where('status',0)
                          ->orderBy('appointment', 'asc');
            
    }


}

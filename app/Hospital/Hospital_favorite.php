<?php

namespace App\Hospital;

use Illuminate\Database\Eloquent\Model;

class Hospital_favorite extends Model
{
    protected $fillable=['user_id','hospital_id'];

    public function AvgRating()
    {  
       return $this->hasMany('App\Hospital\Hospitals_review','hospital_id','hospitals.id');
    }

    public function specialt()
    {  
       return $this->hasMany('App\Hospital\Hospital_specialtie', 'hospital_id','hospitals.id');
    }

     public function city()
    {  
       return $this->belongsTo('App\City');
    }

    public function user()
    {  
       return $this->belongsTo('App\Shared_table','user_id','user_id');
    }

}

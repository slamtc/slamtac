<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    protected $fillable=['doctor_id','latitude','longitude','cl_name_ar','cl_name_en','cl_number','cl_building_number_ar','cl_building_number_en','cl_floor_ar','cl_floor_en','cl_apartment_ar','cl_apartment_en','cl_landmark_ar','cl_landmark_en','cl_phone','city_id','cl_street_name_ar','cl_street_name_en',];



    public function Doctor()
    {  
      return $this->belongsTo('App\Doctor','doctor_id','id');
    }
}




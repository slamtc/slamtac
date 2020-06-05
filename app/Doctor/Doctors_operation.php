<?php

namespace App\Doctor;

use Illuminate\Database\Eloquent\Model;

class Doctors_operation extends Model
{
    protected $fillable=['operation_name_ar','operation_name_en','doctor_id','basic_specialtie_id','photo','rating','price','description_ar','description_en','infoforu_ar','infoforu_en','views'];

    protected $hidden = [
        'created_at', 'updated_at','photo',
    ];

    protected $appends = ['photos'];


    public function getPhotosAttribute()
    {
        return ('operations/' . $this->photo);

    }//end of image path attribute


    public function AvgRating()
    {  
       return $this->hasMany('App\Doctor\Operations_review');
    }


    public function operations_reservation()
    { 
       $today = date("Y-m-d"); 
       return $this->hasMany('App\Doctor\Operations_reservation')
                          ->where('appointment','>=',$today) 
                          ->where('status',0)
                          ->limit(30)
                          ->orderBy('appointment', 'asc');
    }


}

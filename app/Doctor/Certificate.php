<?php

namespace App\Doctor;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable=['doctor_id','country_id','degree_id','university_id','year'];


    public function Certificates_photo()
    {  
       return $this->hasMany('App\Doctor\Certificates_photo');
    }
}

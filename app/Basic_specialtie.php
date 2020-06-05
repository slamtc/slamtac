<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basic_specialtie extends Model
{
    protected $fillable=['specialty_name_ar','specialty_name_en'];

    public function doctor()
    {
        return $this->hasMany('App\Doctor','specialties_id');
    }

    public function Sub_specialtie()
    {
        return $this->hasMany('App\Sub_specialtie');
    }
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable=['basic_specialties_id','service_name_ar','service_name_en'];    
}

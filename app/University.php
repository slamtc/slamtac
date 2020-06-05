<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $fillable=['country_id','university_name_ar','university_name_en'];    
}

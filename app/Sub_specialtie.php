<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_specialtie extends Model
{
    protected $fillable=['ba_specialty_id','sub_specialty_name_ar','sub_specialty_name_en']; 

     protected $hidden = [
        'created_at', 'updated_at',
    ];   
}

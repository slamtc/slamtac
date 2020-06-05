<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctors_sub_specialtie extends Model
{
    protected $fillable=['doctor_id','sub_specialtie_id']; 

     protected $hidden = [
        'created_at', 'updated_at',
    ];   
}

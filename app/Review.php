<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable=['patient_id','doctor_id','rating','comment'];    
}

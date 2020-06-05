<?php

namespace App\Hospital;

use Illuminate\Database\Eloquent\Model;

class Hospitals_review extends Model
{
    protected $fillable=['patient_id','hospital_id','rating','comment'];
}

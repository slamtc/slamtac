<?php

namespace App\Doctor;

use Illuminate\Database\Eloquent\Model;

class Operations_review extends Model
{
    protected $fillable=['patient_id','doctors_operation_id','rating','comment'];

}

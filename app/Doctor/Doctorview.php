<?php

namespace App\Doctor;

use Illuminate\Database\Eloquent\Model;

class Doctorview extends Model
{
    protected $fillable=['doctor_id','token_device'];
}

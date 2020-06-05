<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable=['ppatient_id','patient_name','gender','date_birth','photo'];

        
}

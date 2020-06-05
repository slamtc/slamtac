<?php

namespace App\Labs;

use Illuminate\Database\Eloquent\Model;

class Labs_reservation extends Model
{
    protected $fillable=['patient_id','labs_appointments_id','status','code','labs_branche_id'];
  
}

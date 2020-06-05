<?php

namespace App\Doctor;

use Illuminate\Database\Eloquent\Model;

class Operations_booking extends Model
{
    protected $fillable=['operations_reservation_id','patient_id','clinic_id','status','code','cl_price'];

}

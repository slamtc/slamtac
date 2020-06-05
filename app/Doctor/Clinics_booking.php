<?php

namespace App\Doctor;

use Illuminate\Database\Eloquent\Model;

class Clinics_booking extends Model
{
    protected $fillable=['clinics_reservation_id','patient_id','status','doctor_id','code','type','cl_price'];

    

}

<?php

namespace App\Doctor;

use Illuminate\Database\Eloquent\Model;

class Doctores_reservation extends Model
{
    protected $fillable=['reservation_id','patient_id','status','doctor_id','code','type','cl_price'];

    

}

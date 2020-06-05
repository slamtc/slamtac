<?php

namespace App\Pharmacy;

use Illuminate\Database\Eloquent\Model;

class P_branches_review extends Model
{
    protected $fillable=['patient_id','branches_id','rating','comment'];

   
}

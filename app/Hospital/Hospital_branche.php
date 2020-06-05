<?php

namespace App\Hospital;

use Illuminate\Database\Eloquent\Model;

class Hospital_branche extends Model
{
    protected $fillable=['hospital_id','branches_id','adress_ar','adress_en'];
}

<?php

namespace App\Labs;

use Illuminate\Database\Eloquent\Model;

class Labs_order extends Model
{
    protected $fillable=['patient_id','labs_id','items','images'];
  
}

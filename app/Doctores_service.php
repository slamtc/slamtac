<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctores_service extends Model
{
    protected $fillable=['doctor_id','service_name'];

    public function Service()
    {  
      return $this->belongsTo('App\Service');      
    }  
}

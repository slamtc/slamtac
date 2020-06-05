<?php

namespace App\Labs;

use Illuminate\Database\Eloquent\Model;

class Labs_appointment extends Model
{
    protected $fillable=['lab_id','appointment','status','days'];

    protected $hidden = [
        'created_at', 'updated_at','lab_id'
    ];


    public function lab_reservation()
    {  
        return $this->hasMany('App\Labs\Labs_reservation','labs_appointments_id')->where('status',0);                      
    }


}

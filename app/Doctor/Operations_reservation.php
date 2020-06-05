<?php

namespace App\Doctor;

use Illuminate\Database\Eloquent\Model;

class Operations_reservation extends Model
{
    protected $fillable=['doctors_operation_id','appointment','from','to','status','kind','days'];

    protected $hidden = [
        'created_at', 'updated_at'
    ];


    public function doctors_operation()
    {  
       return $this->belongsTo('App\Doctor\Doctors_operation');
    }

}

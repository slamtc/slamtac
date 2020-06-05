<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Smallreservation extends Model
{
    protected $fillable=['user_id','clinics_reservation_id','from'];
    
    protected $hidden = [
        'created_at', 'updated_at',
    ];

    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branche extends Model
{
    protected $fillable=['user_id','branche_ar','branche_en','state_id'];
    protected $hidden = [
        'created_at', 'updated_at',
    ];

}
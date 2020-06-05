<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurance_user extends Model
{
    protected $fillable=['user_id','company_id'];

    protected $hidden = [
        'created_at', 'updated_at'
    ];
       
}

<?php

namespace App\Consulting;

use Illuminate\Database\Eloquent\Model;

class Tamany_doctor extends Model
{
    protected $fillable=['user_id'];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}

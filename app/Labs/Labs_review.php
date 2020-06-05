<?php

namespace App\Labs;

use Illuminate\Database\Eloquent\Model;

class Labs_review extends Model
{
    protected $guarded = ['id'];

    protected $hidden = [
        'created_at', 'updated_at',
    ];


  
}

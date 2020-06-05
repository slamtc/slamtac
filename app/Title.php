<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $fillable=['title_name'];

    protected $hidden = [
        'created_at', 'updated_at'
    ];
    
}

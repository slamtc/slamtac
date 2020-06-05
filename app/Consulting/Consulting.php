<?php

namespace App\Consulting;

use Illuminate\Database\Eloquent\Model;

class Consulting extends Model
{
    protected $fillable=['name','phone','age'];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}

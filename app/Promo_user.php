<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo_user extends Model
{
    protected $fillable=['user_id','code'];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

}

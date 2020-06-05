<?php

namespace App\Hospital;

use Illuminate\Database\Eloquent\Model;

class Book_nursery extends Model
{
    protected $fillable=['user_id','nursery_id','code','stutas','child_name'];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}

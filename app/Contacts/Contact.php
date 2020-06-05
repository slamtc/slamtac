<?php

namespace App\Contacts;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable=['user_id','message'];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

}

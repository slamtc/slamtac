<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Password_forget extends Model
{
    protected $fillable=['email','code','expires_at'];
}

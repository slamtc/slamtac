<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_review extends Model
{
    protected $fillable=['patient_id','user_id','rating','comment'];    
}

<?php

namespace App\Patient;

use Illuminate\Database\Eloquent\Model;

class Activeuser extends Model
{
    protected $fillable=['email','phone','mobile_code'];
}

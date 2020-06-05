<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo_code extends Model
{
    protected $fillable=['code','discount','expired','is_active'];    
}

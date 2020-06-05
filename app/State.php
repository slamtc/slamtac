<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable=['country_id','st_name_ar','st_name_en'];    
}

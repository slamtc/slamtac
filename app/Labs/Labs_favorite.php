<?php

namespace App\Labs;

use Illuminate\Database\Eloquent\Model;

class Labs_favorite extends Model
{
    protected $fillable=['user_id','labs_branche_id'];

    public function AvgRating()
    {  
       return $this->hasMany('App\Labs\Labs_review','lab_id','labs.id');
    }
}

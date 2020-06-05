<?php

namespace App\Pharmacy;

use Illuminate\Database\Eloquent\Model;

class Pharmacies_favorite extends Model
{
    protected $fillable=['user_id','pharmacies_branche_id'];



    public function AvgRating()
    {  
       return $this->hasMany('App\Pharmacy\P_branches_review','branches_id','pharmacies.id');
    }
}

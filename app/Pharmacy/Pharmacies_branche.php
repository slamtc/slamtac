<?php

namespace App\Pharmacy;

use Illuminate\Database\Eloquent\Model;

class Pharmacies_branche extends Model
{
    protected $fillable=['pharmacy_id','city_id','branches_id','latitude','longitude','street_ar','street_en','views'];

    public function Pharmacy()  
    {
      return $this->belongsTo('App\Pharmacy\Pharmacy');
    }

}

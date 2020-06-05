<?php

namespace App\Labs;

use Illuminate\Database\Eloquent\Model;

class Labs_branche extends Model
{
    protected $fillable=['lab_id','city_id','latitude','longitude','street_ar','street_en','views'];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
    
    public function Lab()  
    {
      return $this->belongsTo('App\Labs\Lab');
    }

    public function AvgRating()
    {  
       return $this->hasMany('App\Labs\Labs_review','lab_id','lab_id');
    }


    



    

    
}

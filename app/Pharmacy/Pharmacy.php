<?php

namespace App\Pharmacy;

use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    protected $fillable=['user_id','pharmacy_name_ar','pharmacy_name_en','photo','phone'];

    protected $hidden = [
        'created_at', 'updated_at',
    ];


     protected $appends = ['count_views'];


    public function getCountViewsAttribute()
    {  
       
       if($this->hasMany('App\Pharmacy\Pharmacies_branche')->count() == 0)
       {
         return "0";
       }else
       {
         return $this->hasMany('App\Pharmacy\Pharmacies_branche')->sum('views');
       }
          
    }//end of image path attribute


    public function insurance_companies()
    {  
       return $this->hasMany('App\Insurance_user', 'user_id','user_id');
    }





    public function AvgRating()
    {  
       return $this->hasMany('App\Pharmacy\P_branches_review','branches_id');
    }


    public function Pharmacy_slider()
    {  
       return $this->hasMany('App\Pharmacy\Pharmacy_slider','user_id','user_id');
    }


    public function Pharmacies_branche()
    {  
       return $this->hasMany('App\Pharmacy\Pharmacies_branche')->SUM('views');
    }


    public function users()
    {  
       return $this->belongsTo('App\User','user_id');
    }

}

<?php

namespace App\Labs;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    protected $fillable=['user_id','lab_name_ar','lab_name_en','photo','rating','information_ar','information_en','froms','too','price','phone'];

    protected $hidden = [
        'created_at', 'updated_at','photo',
    ];

    protected $appends = ['photos','count_views'];


    public function getPhotosAttribute()
    {
        return ('labs/' . $this->photo);

    }//end of image path attribute
     



    public function getCountViewsAttribute()
    {  
       
       if($this->hasMany('App\Labs\Labs_branche')->count() == 0)
       {
         return "0";
       }else
       {
         return $this->hasMany('App\Labs\Labs_branche')->sum('views');
       }
          
    }//end of image path attribute 

    public function Labs_slider()
    {  
       return $this->hasMany('App\Pharmacy\Pharmacy_slider','user_id','user_id');
    }


    public function Insurance_user()
    {  
      return $this->hasMany('App\Insurance_user', 'user_id','user_id')
                         ->join('insurance_companies','insurance_users.company_id','insurance_companies.id')
                          ->select('insurance_companies.id','insurance_companies.company_name_'.app()->getLocale(). ' as company_name' ,'insurance_users.user_id');      
    }


    public function labs_services()
    {  
      return $this->hasMany('App\Labs\Labs_service','lab_id','lab_id')
                         ->join('services_lists','labs_services.services_list_id','services_lists.id')
                          ->select('services_lists.id','services_lists.service_name_'.app()->getLocale(). ' as service_name' ,'labs_services.lab_id');      
    }


    public function AvgRating()
    {  
       return $this->hasMany('App\Labs\Labs_review','lab_id');
    }

    public function insurance_companies()
    {  
       return $this->hasMany('App\Insurance_user', 'user_id','user_id');
    }


    public function Labs_appointment()
    {  
        $today = date("Y-m-d");     	
       return $this->hasMany('App\Labs\Labs_appointment','lab_id','lab_id')
                          ->where('appointment','>=',$today) 
                          ->where('status',0)
                          ->orderBy('appointment', 'asc');
    }


    public function users()
    {  
       return $this->belongsTo('App\User','user_id');
    }

    
}

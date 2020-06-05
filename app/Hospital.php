<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable=['user_id','hospital_name_ar','hospital_name_en','photo','rating','longitude','latitude','information_ar','information_ar','city_id','views','cl_street_name_ar','cl_street_name_en'];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    protected $appends = ['photos'];


    public function getPhotosAttribute()
    {
        return 'hospitals/'. $this->photo;

    }//end of get image path

    public function AvgRating()
    {  
       return $this->hasMany('App\Hospital\Hospitals_review');
    }

    public function AvgRatingPath()
    {  
      return $this->hasMany('App\Hospital\Hospitals_review')
                         ->join('patients','hospitals_reviews.patient_id','patients.ppatient_id')
                          ->select('comment','patient_name','hospitals_reviews.created_at')->orderby('hospitals_reviews.id','DESC');      
    }


    public function AvgRatingUser()
    {  
      return $this->hasMany('App\Review', 'doctor_id','user_id')
                         ->join('patients','reviews.patient_id','patients.ppatient_id')
                          ->select('comment','patient_name','reviews.created_at');      
    }


    public function specialt()
    {  
       return $this->hasMany('App\Hospital\Hospital_specialtie', 'hospital_id','id');
    }


   


    public function hosp_specialt()
    {  
      return $this->hasMany('App\Hospital\Hospital_specialtie', 'hospital_id')
                         ->join('basic_specialties','hospital_specialties.basic_specialties_id','basic_specialties.id')
                          ->select('basic_specialties.id','basic_specialties.specialty_name_'.app()->getLocale(). ' as specialty_name' ,'hospital_specialties.hospital_id');      
    }


    public function branches()
    {  
      return $this->hasMany('App\Hospital\Hospital_branche', 'hospital_id','id')
                         ->join('branches','hospital_branches.branches_id','branches.id')
                          ->select('branches.id','branches.branche_'.app()->getLocale(). ' as branche' ,'hospital_branches.hospital_id');      
    }

    
    public function city()
    {  
       return $this->belongsTo('App\City');
    }

   
    // public function user()
    // {  
    //    return $this->hasOne('App\Shared_table','user_id','user_id');  
    // }


    public function users()
    {  
       return $this->belongsTo('App\User','user_id');  
    }
    
    // public function Branches()
    // {  
    //    return $this->hasMany('App\Branche','user_id','user_id');
    // }

    public function Doctor()
    {  
       return $this->hasMany('App\Doctor','doctor_id','user_id');
    }

    public function shared_table()
    {  
       return $this->belongsTo('App\Shared_table','user_id','user_id');
    }

    public function Nursery()
    {  
       return $this->hasOne('App\Hospital\Nursery','hospital_id','user_id');
    }


     public function Insurance_user()
    {  
      return $this->hasMany('App\Insurance_user','user_id','user_id')
                         ->join('insurance_companies','insurance_users.company_id','insurance_companies.id');
                                
    }

    

    



    

   
}

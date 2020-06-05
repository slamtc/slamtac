<?php

namespace App;




use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable=['titles_id','name_ar','name_en','last_name_ar','last_name_en','title_ar','title_en','photo','doctor_id','specialties_id','brief_ar','brief_en','cl_price','rating','paied','waittime','gender','promocode','doctorviews','personal_realization','barthday'];

    public function AvgRating()
    {  
       return $this->hasMany('App\Review', 'doctor_id','id');
    }

    public function AvgRatingPath()
    {  
      return $this->hasMany('App\Review','doctor_id','id')
                         ->join('patients','reviews.patient_id','patients.ppatient_id');
                                
    }




    public function clinic()
    {  
      return $this->hasOne('App\Clinic');      
    }

    public function city()
    {  
      return $this->belongsTo('App\City','city_id');     
    }

    public function hospital()
    {  
       return $this->belongsTo('App\Hospital', 'doctor_id','user_id' );
    }

    public function user()
    {  
       return $this->hasOne('App\Clinic','doctor_id','id');  
    }

    public function permissions()
    {  
      return $this->belongsTo('App\User','doctor_id','id');
    }

    public function reservation()
    {  
      $today = date("Y-m-d");
        return $this->hasOne('App\Doctor\Clinics_reservation','clinic_id')
                          ->where('appointment','>=',$today) 
                          ->where('status',0)
                          ->orderBy('appointment', 'asc');
            
    }
    
    public function doctor_reservation_hos()
    {  
      $today = date("Y-m-d");
        return $this->hasOne('App\Reservation')
                          ->where('appointment','>=',$today) 
                          ->where('status',0)
                          ->orderBy('appointment', 'asc');
            
    }




    public function all_reservation()
    {  
        $today = date("Y-m-d");
        return $this->hasMany('App\Doctor\Clinics_reservation','clinic_id','clinics_id')
                          ->where('appointment','>=',$today) 
                          ->where('status',0)
                          ->limit(30)
                          ->orderBy('appointment', 'asc');
    }
     
    public function all_reservation_host()
    {  
        $today = date("Y-m-d");
        return $this->hasMany('App\Reservation')
                          ->where('appointment','>=',$today) 
                          ->where('status',0)
                          ->limit(30)
                          ->orderBy('appointment', 'asc');
    } 
    public function Insurancedoctor()
    {  
      return $this->hasMany('App\Insurance_user', 'user_id','doctor_id')
                         ->join('insurance_companies','insurance_users.company_id','insurance_companies.id')
                          ->select('insurance_companies.id','insurance_companies.company_name_'.app()->getLocale(). ' as company_name' ,'insurance_users.user_id');      
    }


    public function Doctores_service()
    {  
      return $this->hasMany('App\Doctores_service', 'doctor_id','id')
                          ->join('services','doctores_services.service_id','services.id')
                          ->select('services.id','services.service_name_'.app()->getLocale(). ' as service_name' ,'doctores_services.doctor_id');         
    }


    public function Sub_specialtie()
    {
        return $this->hasMany('App\Sub_specialtie','id','specialties_id');
    }



    public function bookings()
    {  
        return $this->hasMany('App\Doctor\Doctores_reservation')->where('status',0);                      
    }


    public function Basic_specialtie()
    {  
        return $this->belongsTo('App\Basic_specialtie','specialties_id');                      
    }
    
    public function Title()
    {  
        return $this->belongsTo('App\Title');                      
    }


    
    public function users()
    {  
       return $this->belongsTo('App\User','doctor_id');
    }

    public function clinics()
    {  
      return $this->hasOne('App\Clinic');
    }

    

}
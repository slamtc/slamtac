<?php

namespace App\Hospital;
use Auth;

use Illuminate\Database\Eloquent\Model;

class Hospital_specialtie extends Model
{
    protected $fillable=['id','hospital_id','basic_specialties_id'];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
      
    
    //// i make this coomnet becuse this part make some proplem in hospital profile in patient Applction 
   protected $appends = ['booking'];


    public function getBookingAttribute()
    {
       $user = Auth::user();
       if($user){
         return $this->hasMany('App\Doctor','specialties_id','basic_specialties_id')
                   ->where('doctors.doctor_id',$user->id)
                   ->join('doctores_reservations','doctors.id','doctores_reservations.doctor_id')
                   ->where('doctores_reservations.status',0)
                   ->count();     
       }
        

    }//end of get image path       


    public function Doctor()
    {   
    	$user = Auth::user();
        return $this->hasMany('App\Doctor','specialties_id','basic_specialties_id')->where('doctors.doctor_id',$user->id);
    }


  
}

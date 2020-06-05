<?php

namespace App\Http\Controllers\Admin\Doctors;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Doctor;
use App\Doctor\Doctores_reservation;
use App\Reservation;
use App\Review;

class DoctorsController extends Controller
{
  
    public function DoctorsProfile($id)
    {
       $doctor = Doctor::where('id',$id)->first();	
       return view('admin.doctors.show',compact('doctor'));
    }// end index 
    
    public function BookingInfo(reservation $reservation)
    {
 
       $doctores_reservations = Doctores_reservation::where('reservation_id',$reservation->id)
                                                     ->join('patients','doctores_reservations.patient_id','patients.ppatient_id')
                                                     ->join('users','doctores_reservations.patient_id','users.id')
                                                    ->get();	
       return view('admin.doctors.bookinginfo',compact('doctores_reservations','reservation'));
    }// end index 

    public function DoctorsCenters()
    {
       $doctors = Doctor::join('basic_specialties','doctors.specialties_id','basic_specialties.id')
                        ->join('clinics','doctors.id','clinics.doctor_id')
                        ->get();  
       return view('admin.doctors.list',compact('doctors'));
    }//


    public function MoreReviewsdDoctor(Doctor $doctor)
    {
       $doctor_reviews = Review::where('doctor_id',$doctor->id)
                                            ->join('patients','reviews.patient_id','patients.ppatient_id')
                                            ->orderby('reviews.id','DESC')
                                            ->paginate(15);  
       return view('admin.doctors.MoreReviews',compact('doctor_reviews','doctor'));
    }// end index  

    
    
}

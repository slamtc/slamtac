<?php

namespace App\Http\Controllers\Admin\Hospitals;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Hospital;
use App\Hospital\Hospitals_review;
use App\Doctor;


class HospitalsController extends Controller
{
    public function index()
    {
       $hospitals = Hospital::get();  	
       return view('admin.hospitals.list',compact('hospitals'));
    }// end index

    public function show(Hospital $hospital)
    {
      return view('admin.hospitals.show',compact('hospital'));
    }// end index
    
    public function HospitalDoctors($id)
    {
       $doctors = Doctor::where('doctor_id',$id)->get();	
       return view('admin.hospitals.HospitalDoctors',compact('doctors'));
    }// end index 
    
    public function MoreReviews(Hospital $hospital)
    {
       $hospitals_reviews = Hospitals_review::where('hospital_id',$hospital->id)
                                            ->join('patients','hospitals_reviews.patient_id','patients.ppatient_id')
                                            ->orderby('hospitals_reviews.id','DESC')
                                            ->paginate(15);  
       return view('admin.hospitals.MoreReviews',compact('hospitals_reviews','hospital'));
    }// end index  
    
    
}

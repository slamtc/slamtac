<?php

use Illuminate\Database\Seeder;
use App\Clinic;

class ClinicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	   $names[] = (object) [
	     	'doctor_id' => 1,
	     	'city_id'   => 1,
	     	'latitude'=>'29.9826156',
	     	'longitude'=>'31.3184139',
	     	'cl_name_ar'=> '',
	     	'cl_name_en'=>'',
	     	'cl_number'=> '',
	     	'cl_street_name_ar'=> 'cl_street_name_ar',
	     	'cl_street_name_en'=> 'cl_street_name_en',
	     	
	     	
	     ];
	     $names[] = (object) [
	     	'doctor_id' => 2,
	     	'city_id'   => 1,
	     	'latitude'=>'29.9826156',
	     	'longitude'=>'31.3184139',
	     	'cl_name_ar'=> '',
	     	'cl_name_en'=>'',
	     	'cl_number'=> '',
	     	'cl_street_name_ar'=> 'cl_street_name_ar',
	     	'cl_street_name_en'=> 'cl_street_name_en',
	     	
	     	
	     ];
	     $names[] = (object) [
	     	'doctor_id' => 1,
	     	'city_id'   => 1,
	     	'latitude'=>'29.9826156',
	     	'longitude'=>'31.3184139',
	     	'cl_name_ar'=> '',
	     	'cl_name_en'=>'',
	     	'cl_number'=> '',
	     	'cl_street_name_ar'=> 'cl_street_name_ar',
	     	'cl_street_name_en'=> 'cl_street_name_en',
	     	
	     	
	     ];
	     
	      
        foreach ($names as $name_itm) { 
	    	Clinic::create([
	            'doctor_id' => $name_itm->doctor_id,
	            'city_id' =>  $name_itm->city_id,
	            'latitude' => $name_itm->latitude,
	            'longitude' => $name_itm->longitude,
                'cl_name_ar' => $name_itm->cl_name_en,
                'cl_name_en' => $name_itm->cl_name_en,
                'cl_street_name_ar' => $name_itm->cl_street_name_ar,
                'cl_street_name_en' => $name_itm->cl_street_name_en,
                                
	        ]);

    	}
    }
}

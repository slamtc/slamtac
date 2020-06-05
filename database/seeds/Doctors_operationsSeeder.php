<?php

use Illuminate\Database\Seeder;
use App\Doctor\Doctors_operation;

class Doctors_operationsSeeder extends Seeder
{

	/**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	   $names[] = (object) [
	     	'clinic_id' => 1,
	     	'operation_name_ar'=>'operation_name_ar',
	     	'operation_name_en'=>'operation_name_en',
	     	'basic_specialtie_id'=> 1,
	     	'photo'=>'photo.jpg',
	     	'rating'=> 5,
	     	'price'=> '150',
	     	'description_ar'=> 'description_ar',
	     	'description_en' =>'description_en',
	     	'infoforu_ar' =>'infoforu_ar',
	     	'infoforu_en' =>'infoforu_en',
	     	'views' =>'30'
	     ];
	     $names[] = (object) [
	     	'clinic_id' => 1,
	     	'operation_name_ar'=>'operation_name_ar',
	     	'operation_name_en'=>'operation_name_en',
	     	'basic_specialtie_id'=> 1,
	     	'photo'=>'photo.jpg',
	     	'rating'=> 5,
	     	'price'=> '2000',
	     	'description_ar'=> 'description_ar',
	     	'description_en' =>'description_en',
	     	'infoforu_ar' =>'infoforu_ar',
	     	'infoforu_en' =>'infoforu_en',
	     	'views' =>'80'
	     ];
	     $names[] = (object) [
	     	'clinic_id' => 2,
	     	'operation_name_ar'=>'operation_name_ar',
	     	'operation_name_en'=>'operation_name_en',
	     	'basic_specialtie_id'=> 1,
	     	'photo'=>'photo.jpg',
	     	'rating'=> 5,
	     	'price'=> '50',
	     	'description_ar'=> 'description_ar',
	     	'description_en' =>'description_en',
	     	'infoforu_ar' =>'infoforu_ar',
	     	'infoforu_en' =>'infoforu_en',
	     	'views' =>'50'
	     ];
	     
	     
	      
        foreach ($names as $name_itm) { 
	    	Doctors_operation::create([
	            'clinic_id' => $name_itm->clinic_id,
	            'operation_name_ar' =>  $name_itm->operation_name_ar,
	            'operation_name_en' =>  $name_itm->operation_name_en,
	            'basic_specialtie_id' => $name_itm->basic_specialtie_id,
	            'photo' => $name_itm->photo,
                'rating' => $name_itm->rating,
                'price' => $name_itm->price,
                'description_ar' => $name_itm->description_ar,
                'description_en' => $name_itm->description_en,
                'infoforu_ar' => $name_itm->infoforu_ar,
                'infoforu_en' => $name_itm->infoforu_en,
                'views' => $name_itm->views,
                                
	        ]);

    	}
    }
}

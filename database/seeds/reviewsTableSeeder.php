<?php

use Illuminate\Database\Seeder;
use App\Review;

class reviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $names= [{"email": 'sadasdas' }];
          
$names[] = (object) ['patient_id' => 6,'doctor_id'=> 4,'rating'=> 5,'comment'=>'دكتور كويس جدااا'];
$names[] = (object) ['patient_id' => 6,'doctor_id'=> 1,'rating'=> 4,'comment'=>'very Good '];
$names[] = (object) ['patient_id' => 7,'doctor_id'=> 2,'rating'=> 5,'comment'=>'دكتور شاطر'];
$names[] = (object) ['patient_id' => 7,'doctor_id'=> 3,'rating'=> 1,'comment'=>'دكتور سئ'];
$names[] = (object) ['patient_id' => 6,'doctor_id'=> 5,'rating'=> 2,'comment'=>'Not bad'];

       
        foreach ($names as $name_itm) { 
	    	Review::create([
	            'patient_id' => $name_itm->patient_id,
	            'doctor_id'      => $name_itm->doctor_id,
	            'rating'      => $name_itm->rating,
	            'comment'      => $name_itm->comment,
	        ]);
    	}
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Labs\Labs_appointment;

class labs_appointmentsTableSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $names= [{"email": 'sadasdas' }];

       $names[] = (object) [ 'appointment' => '2020-05-16',  'lab_id'=>'1'];
       $names[] = (object) [ 'appointment' => '2020-06-16',  'lab_id'=>'1'];
       $names[] = (object) [ 'appointment' => '2020-06-20',  'lab_id'=>'1'];
       $names[] = (object) [ 'appointment' => '2020-06-22',  'lab_id'=>'1'];
       $names[] = (object) [ 'appointment' => '2020-06-28',  'lab_id'=>'1'];
       

       $names[] = (object) [ 'appointment' => '2020-05-16',  'lab_id'=>'2'];
       $names[] = (object) [ 'appointment' => '2020-06-16',  'lab_id'=>'2'];
       $names[] = (object) [ 'appointment' => '2020-06-20',  'lab_id'=>'2'];
       $names[] = (object) [ 'appointment' => '2020-06-25',  'lab_id'=>'2'];


       $names[] = (object) [ 'appointment' => '2020-06-20',  'lab_id'=>'3'];
       $names[] = (object) [ 'appointment' => '2020-06-21',  'lab_id'=>'3'];
       $names[] = (object) [ 'appointment' => '2020-06-22',  'lab_id'=>'3'];
       $names[] = (object) [ 'appointment' => '2020-06-23',  'lab_id'=>'3'];


      
       $names[] = (object) [ 'appointment' => '2020-06-20',  'lab_id'=>'4'];
       $names[] = (object) [ 'appointment' => '2020-06-21',  'lab_id'=>'4'];
       $names[] = (object) [ 'appointment' => '2020-06-22',  'lab_id'=>'4'];
       $names[] = (object) [ 'appointment' => '2020-06-23',  'lab_id'=>'4'];
       $names[] = (object) [ 'appointment' => '2020-06-25',  'lab_id'=>'4'];
       $names[] = (object) [ 'appointment' => '2020-06-26',  'lab_id'=>'4'];
       $names[] = (object) [ 'appointment' => '2020-06-27',  'lab_id'=>'4'];
       $names[] = (object) [ 'appointment' => '2020-06-27',  'lab_id'=>'4'];



       $names[] = (object) [ 'appointment' => '2020-06-20',  'lab_id'=>'5'];
       $names[] = (object) [ 'appointment' => '2020-06-21',  'lab_id'=>'5'];
       $names[] = (object) [ 'appointment' => '2020-06-22',  'lab_id'=>'5'];
       $names[] = (object) [ 'appointment' => '2020-06-23',  'lab_id'=>'5'];
       $names[] = (object) [ 'appointment' => '2020-06-25',  'lab_id'=>'5'];
       $names[] = (object) [ 'appointment' => '2020-06-26',  'lab_id'=>'5'];
       $names[] = (object) [ 'appointment' => '2020-06-27',  'lab_id'=>'5'];
       $names[] = (object) [ 'appointment' => '2020-06-27',  'lab_id'=>'5'];
       
       
                   
                   
       foreach ($names as $name_itm) { 
	    	Labs_appointment::create([
	            'lab_id'       => $name_itm->lab_id,
	            'appointment'  => $name_itm->appointment,
             
	        ]);
    	}
    }
}

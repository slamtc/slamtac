<?php

use Illuminate\Database\Seeder;
use App\Doctores_service;

class doctores_servicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $names= [{"email": 'sadasdas' }];
          
$names[] = (object) ['service_id' => 1,'doctor_id'=> 1];
$names[] = (object) ['service_id' => 2,'doctor_id'=> 1];
$names[] = (object) ['service_id' => 3,'doctor_id'=> 1];
$names[] = (object) ['service_id' => 4,'doctor_id'=> 4];
$names[] = (object) ['service_id' => 5,'doctor_id'=> 4];


       
        foreach ($names as $name_itm) { 
	    	Doctores_service::create([
	            'service_id' => $name_itm->service_id,
	            'doctor_id'      => $name_itm->doctor_id,
	        ]);
    	}
    }
}

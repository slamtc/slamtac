<?php

use Illuminate\Database\Seeder;
use App\Labs\Labs_service;

class labs_servicesTableSeeder extends Seeder
{ /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $names= [{"email": 'sadasdas' }];

       $names[] = (object) [ 'services_list_id' => '1',  'lab_id'=>'1'];
       $names[] = (object) [ 'services_list_id' => '2',  'lab_id'=>'1'];
       $names[] = (object) [ 'services_list_id' => '3',  'lab_id'=>'1'];
       $names[] = (object) [ 'services_list_id' => '4',  'lab_id'=>'1'];
       $names[] = (object) [ 'services_list_id' => '5',  'lab_id'=>'1'];
       

       $names[] = (object) [ 'services_list_id' => '1',  'lab_id'=>'2'];
       $names[] = (object) [ 'services_list_id' => '2',  'lab_id'=>'2'];
       $names[] = (object) [ 'services_list_id' => '3',  'lab_id'=>'2'];
       $names[] = (object) [ 'services_list_id' => '4',  'lab_id'=>'2'];


       $names[] = (object) [ 'services_list_id' => '1',  'lab_id'=>'3'];
       $names[] = (object) [ 'services_list_id' => '2',  'lab_id'=>'3'];
       $names[] = (object) [ 'services_list_id' => '4',  'lab_id'=>'3'];
       $names[] = (object) [ 'services_list_id' => '5',  'lab_id'=>'3'];


      
       $names[] = (object) [ 'services_list_id' => '5',  'lab_id'=>'4'];



       $names[] = (object) [ 'services_list_id' => '1',  'lab_id'=>'5'];
       $names[] = (object) [ 'services_list_id' => '5',  'lab_id'=>'5'];
       
       
                   
                   
       foreach ($names as $name_itm) { 
	    	Labs_service::create([
	            'services_list_id'   => $name_itm->services_list_id,
	            'lab_id'             => $name_itm->lab_id,
             
	        ]);
    	}
    }
}

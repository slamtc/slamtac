<?php

use Illuminate\Database\Seeder;
use App\Doctor\Operations_reservation;

class Operations_reservationsSeeder extends Seeder
{
		/**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $names[] = (object) [
	     	'doctors_operation_id' => 3,
	     	'appointment'=>'2020-06-23',
	     	'from'=>'10:05',
	     	'to'=> '05:05',
	     	'status'=>'0',
	     	'kind'=> 5,
	     	'days'=> '1'
	     ];
	     $names[] = (object) [
	     	'doctors_operation_id' => 3,
	     	'appointment'=>'2020-07-25',
	     	'from'=>'10:05',
	     	'to'=> '05:05',
	     	'status'=>'0',
	     	'kind'=> 5,
	     	'days'=> '1'
	     ];
	     $names[] = (object) [
	     	'doctors_operation_id' => 1,
	     	'appointment'=>'2020-06-28',
	     	'from'=>'10:05',
	     	'to'=> '05:05',
	     	'status'=>'0',
	     	'kind'=> 5,
	     	'days'=> '1'
	     ];
	     $names[] = (object) [
	     	'doctors_operation_id' => 2,
	     	'appointment'=>'2020-06-26',
	     	'from'=>'10:05',
	     	'to'=> '05:05',
	     	'status'=>'0',
	     	'kind'=> 5,
	     	'days'=> '1'
	     ];
	      
        foreach ($names as $name_itm) { 
	    	Operations_reservation::create([
	            'doctors_operation_id' => $name_itm->doctors_operation_id,
	            'appointment' =>  $name_itm->appointment,
	            'from' =>  $name_itm->from,
	            'to' => $name_itm->to,
	            'status' => $name_itm->status,
                'kind' => $name_itm->kind,
                'days' => $name_itm->days                
	        ]);

    	}
    }
}

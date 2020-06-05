<?php

use Illuminate\Database\Seeder;
use App\Pharmacy\Pharmacy_slider;

class pharmacy_slidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $names[] = (object) ['user_id' => '8','image'=>'offer1.jpg'];
       $names[] = (object) ['user_id' => '9','image'=>'offer2.jpg'];
       $names[] = (object) ['user_id' => '10','image'=>'offer3.jpg'];
       $names[] = (object) ['user_id' => '8','image'=>'offer4.jpg'];
       $names[] = (object) ['user_id' => '9','image'=>'offer5.jpg'];
       $names[] = (object) ['user_id' => '10','image'=>'offer6.jpg'];
       $names[] = (object) ['user_id' => '8','image'=>'offer7.jpg'];
       $names[] = (object) ['user_id' => '9','image'=>'offer8.jpg'];



       $names[] = (object) ['user_id' => '17','image'=>'offer1.jpg'];
       $names[] = (object) ['user_id' => '18','image'=>'offer2.jpg'];
       $names[] = (object) ['user_id' => '19','image'=>'offer3.jpg'];
       $names[] = (object) ['user_id' => '20','image'=>'offer4.jpg'];
       $names[] = (object) ['user_id' => '21','image'=>'offer5.jpg'];
       $names[] = (object) ['user_id' => '17','image'=>'offer6.jpg'];
       $names[] = (object) ['user_id' => '18','image'=>'offer7.jpg'];
       $names[] = (object) ['user_id' => '19','image'=>'offer8.jpg'];
        foreach ($names as $name_itm) { 
	    	Pharmacy_slider::create([
	            'user_id' => $name_itm->user_id,
	            'image'       => $name_itm->image,
	            
	        ]);
    	}
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Sub_specialtie;

class Sub_specialtiesSeeder extends Seeder
{  /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $names= [{"email": 'sadasdas' }];
          
	$names[] = (object) ['ba_specialty_id' => 1,'sub_specialty_name_ar'=> 'تغير دم ','sub_specialty_name_en'=>'Blood change'];
	$names[] = (object) ['ba_specialty_id' => 1,'sub_specialty_name_ar'=> 'تنظيف دم','sub_specialty_name_en'=>'Blood cleaning'];
	$names[] = (object) ['ba_specialty_id' => 1,'sub_specialty_name_ar'=> 'تنقية دم','sub_specialty_name_en'=>'Blood purification'];


	$names[] = (object) ['ba_specialty_id' => 8,'sub_specialty_name_ar'=>'تغير جلد','sub_specialty_name_en'=>'Leather change'];
	$names[] = (object) ['ba_specialty_id' => 8,'sub_specialty_name_ar'=> 'تنظيف جلد','sub_specialty_name_en'=>'Leather cleaning'];
	$names[] = (object) ['ba_specialty_id' => 2,'sub_specialty_name_ar'=> 'تغير عدسه','sub_specialty_name_en'=>'lens changed'];
	$names[] = (object) ['ba_specialty_id' => 2,'sub_specialty_name_ar'=> 'تركيب ننى','sub_specialty_name_en'=>'Nana installation'];



       
        foreach ($names as $name_itm) { 
	    	Sub_specialtie::create([
	            'ba_specialty_id' => $name_itm->ba_specialty_id,
	            'sub_specialty_name_ar'      => $name_itm->sub_specialty_name_ar,
	            'sub_specialty_name_en'      => $name_itm->sub_specialty_name_en,
	        ]);
    	}
    }
}

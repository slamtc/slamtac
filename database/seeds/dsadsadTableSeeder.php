<?php

use Illuminate\Database\Seeder;
use App\Hospital;

class HospitalsTableSeedersdasd extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $names[] = (object) ['user_id' => 4,'hospital_name_ar'=>'مستشفى السلام','hospital_name_en'=>'Al-salam-hospital'];
     $names[] = (object) ['user_id' => 5,'hospital_name_ar'=>'دار الفواد','hospital_name_en'=>'Dar El-Foaud'];
        foreach ($names as $name_itm) { 
	    	Title::create([
	            'user_id' => $name_itm->user_id,
                'hospital_name_ar' => $name_itm->hospital_name_ar,
                'hospital_name_en' => $name_itm->hospital_name_en,
	        ]);
    	}
    }
}

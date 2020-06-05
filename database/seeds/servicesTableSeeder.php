<?php

use Illuminate\Database\Seeder;
use App\Service;

class servicesTableSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $names= [{"email": 'sadasdas' }];
          
$names[] = (object) ['basic_specialties_id' => 1,'service_name_en'=>'Hematology services','service_name_ar'=>'خدمات امراض الدم'];
$names[] = (object) ['basic_specialties_id' => 2,'service_name_en'=>'Change the lens','service_name_ar'=>'تغيير عدسه  '];
$names[] = (object) ['basic_specialties_id' => 6,'service_name_en'=>'Tooth removal','service_name_ar'=>'خلع اسنان'];
$names[] = (object) ['basic_specialties_id' => 6,'service_name_en'=>'Sprocket filling','service_name_ar'=>'حشو ضرس '];
$names[] = (object) ['basic_specialties_id' => 10,'service_name_en'=>'Stomach cleaning','service_name_ar'=>'تنظيف معده '];

       
        foreach ($names as $name_itm) { 
	    	Service::create([
	            'basic_specialties_id' => $name_itm->basic_specialties_id,
	            'service_name_ar'      => $name_itm->service_name_ar,
	            'service_name_en'      => $name_itm->service_name_en,
	        ]);
    	}
    }
}

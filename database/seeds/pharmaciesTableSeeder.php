<?php

use Illuminate\Database\Seeder;
use App\Pharmacy\Pharmacy;

class pharmaciesTableSeeder extends Seeder
{
	 /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $names= [{"email": 'sadasdas' }];
          
$names[] = (object) ['user_id' => '8','pharmacy_name_ar'=>'العزبى ','pharmacy_name_en'=>'El-Ezaby','photo'=>'El-Ezaby.jpg','about_ar'=>'نبذه عن صداليات العزبى','about_en'=>'about El-Ezaby pharmacy','phone'=>19777];

$names[] = (object) ['user_id' => '9','pharmacy_name_ar'=>'صيداليات مصر ','pharmacy_name_en'=>'Misr-Pharmacies','photo'=>'Misr.jpg','about_ar'=>'نبذه عن صداليات مصر','about_en'=>'about Misr-Pharmacies ','phone'=>19777];

$names[] = (object) ['user_id' => '10','pharmacy_name_ar'=>'سيف','pharmacy_name_en'=>'Sayf-Pharmacies','photo'=>'Sayf.jpg','about_ar'=>'نبذه عن صداليات سيف','about_en'=>'about Sayf-Pharmacies ','phone'=>19777];


       
        foreach ($names as $name_itm) { 
	    	Pharmacy::create([
	            'user_id'             => $name_itm->user_id,
	            'pharmacy_name_ar'    => $name_itm->pharmacy_name_ar,
	            'pharmacy_name_en'    => $name_itm->pharmacy_name_en,
                'photo'               => $name_itm->photo,
                'about_ar'            => $name_itm->about_ar,
                'about_en'            => $name_itm->about_en,
                'phone'            => $name_itm->phone,
	        ]);
    	}
    }
}

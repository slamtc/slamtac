<?php

use Illuminate\Database\Seeder;
use App\Pharmacy\Pharmacies_branche;

class pharmacies_branchesTableSeeder extends Seeder
{/**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names[] = (object) ['pharmacy_id' => 1,'city_id'=> '3','branches_id'=>'6','latitude'=>'29.9636707','longitude'=>'31.3383251','street_ar'=>'شارع 9 صيداليات العزبى ','street_en'=>'9 st el-eazby elmadi'];


        $names[] = (object) ['pharmacy_id' => 1,'city_id'=> '2','branches_id'=>'3','latitude'=>'30.092806','longitude'=>'31.3189505','street_ar'=>'شارع الطييران','street_en'=>'El-tyran st el-eazby '];


        $names[] = (object) ['pharmacy_id' => 1,'city_id'=> '1','branches_id'=>'7','latitude'=>'30.1123328','longitude'=>'31.3526055','street_ar'=>'شارع هليوبوليس','street_en'=>'Heliopolis st el-eazby '];





        $names[] = (object) ['pharmacy_id' => 2,'city_id'=> '3','branches_id'=>'6','latitude'=>'29.9615886','longitude'=>'31.3069111','street_ar'=>'شارع 9  مصر ','street_en'=>'9 st p-misr '];


        $names[] = (object) ['pharmacy_id' => 2,'city_id'=> '1','branches_id'=>'7','latitude'=>'30.1101054','longitude'=>'31.3567683','street_ar'=>'شارع هليوبوليس مصر','street_en'=>'Heliopolis st - p-misr'];



        $names[] = (object) ['pharmacy_id' => 3,'city_id'=> '3','branches_id'=>'6','latitude'=>'29.9708089','longitude'=>'31.439777','street_ar'=>'شارع 9 سيف','street_en'=>'9 st syaf elmadi'];

        $names[] = (object) ['pharmacy_id' => 3,'city_id'=> '1','branches_id'=>'7','latitude'=>'30.1101054','longitude'=>'30.1101054','street_ar'=>'شارع  هليوبوليس سيف','street_en'=>'Heliopolis st st syaf'];

        $names[] = (object) ['pharmacy_id' => 3,'city_id'=> '2','branches_id'=>'3','latitude'=>'30.0926946','longitude'=>'31.3269756','street_ar'=>'شارع الطيران  سيف ','street_en'=>'El-tyran  -  syaf'];


        foreach ($names as $name_itm) { 
	    	Pharmacies_branche::create([
	            'pharmacy_id'   => $name_itm->pharmacy_id,
	            'city_id'       => $name_itm->city_id,
                'branches_id'       => $name_itm->branches_id,
	            'latitude'      => $name_itm->latitude,
                'longitude'     => $name_itm->longitude,
                'street_ar'     => $name_itm->street_ar,
                'street_en'     => $name_itm->street_en,
	        ]);
    	}
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Labs\Labs_branche;

class labs_branchesTableSeeder extends Seeder
{

    public function run()
    {
        $names[] = (object) ['lab_id' => 1,'city_id'=> '3','latitude'=>'29.9636707','longitude'=>'31.3383251','street_ar'=>'9  شارع    المعادى ','street_en'=>'9 st el-Albaraj elmadi'];


        $names[] = (object) ['lab_id' => 1,'city_id'=> '2','latitude'=>'30.092806','longitude'=>'31.3189505','street_ar'=>'شارع الطيران  ','street_en'=>'El-tyran st el-Albaraj '];


        $names[] = (object) ['lab_id' => 1,'city_id'=> '1','latitude'=>'30.1123328','longitude'=>'31.3526055','street_ar'=>'ميدان  هليوبوليس  ','street_en'=>'Heliopolis st el-Albaraj '];





        $names[] = (object) ['lab_id' => 2,'city_id'=> '3','latitude'=>'29.9615886','longitude'=>'31.3069111','street_ar'=>'شارع  9  ','street_en'=>'9 st Alfa '];


        $names[] = (object) ['lab_id' => 2,'city_id'=> '1','latitude'=>'30.1101054','longitude'=>'31.3567683','street_ar'=>'ميدان  هليوبوليس   ','street_en'=>'Heliopolis st - L-Alfa'];



        $names[] = (object) ['lab_id' => 3,'city_id'=> '3','latitude'=>'29.9708089','longitude'=>'31.439777','street_ar'=>'شارع   9 ','street_en'=>'9 st  Almukhtabar'];

        $names[] = (object) ['lab_id' => 3,'city_id'=> '1','latitude'=>'30.1101054','longitude'=>'30.1101054','street_ar'=>'ميدان  هليوبوليس   ','street_en'=>'Heliopolis  st Almukhtabar'];

        $names[] = (object) ['lab_id' => 3,'city_id'=> '2','latitude'=>'30.0926946','longitude'=>'31.3269756','street_ar'=>'شارع الطيران  ','street_en'=>'El-tyran  -  Almukhtabar'];




      $names[] = (object) ['lab_id' => 4,'city_id'=> '3','latitude'=>'29.9643027','longitude'=>'31.3457924','street_ar'=>'شارع   9 ','street_en'=>'9 st  Alshams'];

        $names[] = (object) ['lab_id' => 4,'city_id'=> '1','latitude'=>'30.1836829','longitude'=>'31.6812738','street_ar'=>'ميدان  هليوبوليس   ','street_en'=>'Heliopolis  st Alshams'];

        $names[] = (object) ['lab_id' => 4,'city_id'=> '2','latitude'=>'30.0555083','longitude'=>'31.3269379','street_ar'=>'شارع الطيران  ','street_en'=>'El-tyran  -  Alshams'];



$names[] = (object) ['lab_id' => 5,'city_id'=> '3','latitude'=>'29.960436','longitude'=>'31.303392','street_ar'=>'شارع   9 ','street_en'=>'9 st  Hisab'];

        $names[] = (object) ['lab_id' => 5,'city_id'=> '1','latitude'=>'30.1429003','longitude'=>'31.6809224','street_ar'=>'ميدان  هليوبوليس   ','street_en'=>'Heliopolis  st Hisab'];

        $names[] = (object) ['lab_id' => 5,'city_id'=> '2','latitude'=>'30.0555083','longitude'=>'31.3269379','street_ar'=>'شارع الطيران  ','street_en'=>'El-tyran  -  Hisab'];






        foreach ($names as $name_itm) { 
	    	Labs_branche::create([
	            'lab_id'        => $name_itm->lab_id,
	            'city_id'       => $name_itm->city_id,
	            'latitude'      => $name_itm->latitude,
                'longitude'     => $name_itm->longitude,
                'street_ar'     => $name_itm->street_ar,
                'street_en'     => $name_itm->street_en,
	        ]);
    	}
    }
}

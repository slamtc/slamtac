<?php


use Illuminate\Database\Seeder;
use App\Hospital;

class HospitalsTableSeeder extends Seeder
{


  
  
  

  
  
  
  
  
  
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $names[] = (object) ['user_id' => 4,'hospital_name_ar'=>'مستشفى السلام','hospital_name_en'=>'Al-salam-hospital','city_id'=>3,'photo'=>'5_191257_highres.jpg','rating'=>2,'latitude'=>'29.9950163','longitude'=>'31.2265134','information_ar'=>'مستشفى السلام الدولى ','information_en'=>'El- Salma hhh'];


     $names[] = (object) ['user_id' => 5,'hospital_name_ar'=>'دار الفواد','hospital_name_en'=>'Dar El-Foaud','city_id'=>1,'photo'=>'dar-al-fouad_20200218145544107.jpg','rating'=>2,'latitude'=>'30.0037132','longitude'=>'31.2217927','information_ar'=>'الفواد للراعايه','information_en'=>'Dar Foud'];


    $names[] = (object) ['user_id' => 11,'hospital_name_ar'=>'مستشفى الحياة','hospital_name_en'=>'hayat-Hospital','city_id'=>1,'photo'=>'5541465.jpg','rating'=>5,'latitude'=>'29.9684379','longitude'=>'31.2554812','information_ar'=>'نبذه عن مستشفى الحياة','information_en'=>'hayat-Hospital info '];


    $names[] = (object) ['user_id' => 12,'hospital_name_ar'=>'مستشفى تبارك','hospital_name_en'=>'Tabarak Hospital','city_id'=>1,'photo'=>'878.jpg','rating'=>2,'latitude'=>'29.9825272','longitude'=>'31.234796','information_ar'=>'نبذه عن مستشفى تبارك','information_en'=>'Tabarak Hospital'];


    $names[] = (object) ['user_id' => 13,'hospital_name_ar'=>'مستشفى الرحمة ','hospital_name_en'=>'al rahma-hospital','city_id'=>1,'photo'=>'dasdsadkj.jpg','rating'=>1,'latitude'=>'29.991188','longitude'=>'31.2104201','information_ar'=>'نبذه عن مستشفى الرحمة ','information_en'=>'al rahma-hospital'];


    $names[] = (object) ['user_id' => 14,'hospital_name_ar'=>'مستشفى الفاروق ','hospital_name_en'=>'Al-Farouq Hospital','city_id'=>1,'photo'=>'885141411165465.jpg','rating'=>2,'latitude'=>'29.9981755','longitude'=>'31.2735486','information_ar'=>'فارق','information_en'=>'farq'];


    $names[] = (object) ['user_id' => 15,'hospital_name_ar'=>'مستشفى الدمرداش','hospital_name_en'=>'Demerdash Hospital','city_id'=>1,'photo'=>'484654141654165.jpg','rating'=>3,'latitude'=>'29.9837167','longitude'=>'31.2965512','information_ar'=>'سشيشسيشسي ','information_en'=>'Al-Demerdash Hospital '];

    $names[] = (object) ['user_id' => 16,'hospital_name_ar'=>'مستشفى سان بيتر','hospital_name_en'=>'St. Peter s Hospital','city_id'=>1,'photo'=>'w45345345.jpg','rating'=>5,'latitude'=>'29.9911136','longitude'=>'31.1596513','information_ar'=>'نبذه عن مستشفى سان بيتر','information_en'=>'St. Peter s Hospital '];


        foreach ($names as $name_itm) { 
	    	Hospital::create([
	            'user_id' => $name_itm->user_id,
                'hospital_name_ar' => $name_itm->hospital_name_ar,
                'hospital_name_en' => $name_itm->hospital_name_en,
                'city_id' => $name_itm->city_id,
                'photo' => $name_itm->photo,
                'rating' => $name_itm->rating,
                'latitude' => $name_itm->latitude,
                'longitude' => $name_itm->longitude,
                'information_en' => $name_itm->information_en,
                'information_ar' => $name_itm->information_ar,
	        ]);
    	}
    }
}

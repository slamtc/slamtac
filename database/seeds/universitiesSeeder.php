<?php

use Illuminate\Database\Seeder;
use App\University;

class universitiesSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $names= [{"email": 'sadasdas' }];
          
       $names[] = (object) ['country_id'=>'1','university_name_ar'=>'جامعه القاهره','university_name_en'=>'Cairo  University'];
       $names[] = (object) ['country_id'=>'1','university_name_ar'=>'جامعة حلوان','university_name_en'=>'Helwan University'];
       $names[] = (object) ['country_id'=>'2','university_name_ar'=>'جامعة الشارقه','university_name_en'=>'El-sharq University'];
       $names[] = (object) ['country_id'=>'2','university_name_ar'=>'جامعه ابو ظبى','university_name_en'=>'ADB University'];
       $names[] = (object) ['country_id'=>'3','university_name_ar'=>'جامعه البصره','university_name_en'=>'El-Basra University'];
      
       foreach ($names as $name_itm) { 
	    	University::create([
                'country_id'  =>  $name_itm->country_id,
                'university_name_ar'  =>  $name_itm->university_name_ar,
                'university_name_en'  =>  $name_itm->university_name_en,
	           
	        ]);
    	}
    }
}

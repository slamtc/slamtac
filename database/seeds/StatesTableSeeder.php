<?php

use Illuminate\Database\Seeder;
use App\State;

class StatesTableSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$names  = array(
            'القاهره ' =>'Cairo',
            'الاسكندريه ' =>'Alex',
            'قنا' =>'Qena',
            'اسوان' =>'Aswan',
        );
        foreach ($names as $key=>$name_itm) { 
	    	State::create([
	            'st_name_ar' => $key,
                'st_name_en' => $name_itm,
	        ]);
    	}
    }
}

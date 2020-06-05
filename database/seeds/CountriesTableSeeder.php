<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$arr = array('Egypt'=>'مصر  ','UAE'=>'الامارت ', 'Iraq'=>'العراق');

        foreach ($arr as $key=>$name_itm) { 
	    	Country::create([
	            'name_ar' => $name_itm,
                 'name_en' => $key
	        ]);
    	}
    }
}


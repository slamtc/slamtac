<?php

use Illuminate\Database\Seeder;
use App\Title;

class TitlesTableSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$names  = array('Mr','Dc','Assistant');
        foreach ($names as $name_itm) { 
	    	Title::create([
	            'title_name' => $name_itm,
	        ]);
    	}
    }
}

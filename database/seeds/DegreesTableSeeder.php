<?php

use Illuminate\Database\Seeder;
use App\Degree;


class DegreesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$names  = array('بكالوريس ف الطب ','ماجستير جراحه اسنان','دكتوراه ف الفلسلفه','دكتوره فى العلاج الطبيعى','ماجستير جراحه اسنان');
        foreach ($names as $name_itm) { 
	    	Degree::create([
	            'degree_name_ar' => $name_itm,
                'degree_name_en' => $name_itm
	        ]);
    	}
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Basic_specialtie;

class Basic_specialtiesTableSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names['Blood diseases'] = 'أمراض الدم  ';
        $names['Ophthalmology'] = 'طب العيون  ';
        $names['Oncology'] = 'طب الأورام  ';
        $names['Surgery medicine '] = 'طب الجراحة ';
        $names['Psychiatry'] = 'الطب النفسي';
        $names['dentist'] = 'طب الأسنان';
        $names['Plastic surgeon'] = 'جراح التجميل   ';
        $names['skin diseases'] = 'الأمراض الجلدية';
        $names['Urinary Tract'] = 'المسالك البولية  ';
        $names['Gastrointestinal diseases'] = 'أمراض الجهاز الهضمي';
        foreach ($names as $key=>$name_itm) { 
	    	Basic_specialtie::create([
	            'specialty_name_ar' => $name_itm,
                'specialty_name_en' => $key
	        ]);
    	}
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Services_list;

class services_listsTableSeeder extends Seeder
{


    public function run()
    {
       // $names= [{"email": 'sadasdas' }];
          
$names[] = (object) ['service_name_en'=>'Results of analyzes','service_name_ar'=>'نتائج تحاليل'];
$names[] = (object) ['service_name_en'=>'Analysis library','service_name_ar'=>'مكتبة التحاليل'];
$names[] = (object) ['service_name_en'=>'Analysis precautions','service_name_ar'=>'احتياطات التحاليل'];
$names[] = (object) ['service_name_en'=>'Health advice','service_name_ar'=>'نصائح صحية'];
$names[] = (object) ['service_name_en'=>'Medical Diagnostic Center','service_name_ar'=>'مركز التشخيص الطبي'];

       
        foreach ($names as $name_itm) { 
	    	Services_list::create([
	            'service_name_ar' => $name_itm->service_name_ar,
	            'service_name_en' => $name_itm->service_name_en
	        ]);
    	}
    }
}

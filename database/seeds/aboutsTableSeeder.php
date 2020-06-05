<?php

use Illuminate\Database\Seeder;
use App\About;

class aboutsTableSeeder extends Seeder
{
    public function run()
    {
             
      $names[] = (object) [
      	        'page_one_ar' => 'الصفحه الاولى   سلامتك  مريض',
      	        'page_one_en'=>'First Page for salmtic DC',
      	        'page_two_ar'=>'الصفحه  الثانيه  سلامتك   مريض ',
      	        'page_two_en'=>'Second  Page for salmtic DC'
      	        ];

      $names[] = (object) [
                'page_one_ar' => 'الصفحه الاولى   سلامتك  طبيب',
                'page_one_en'=>'First Page for salmtic DC',
                'page_two_ar'=>'الصفحه  الثانيه  سلامتك  طبيب',
                'page_two_en'=>'Second  Page for salmtic DC'
                ];          
       
      foreach ($names as $name_itm) { 
    	 About::create([
            'page_one_ar'  => $name_itm->page_one_ar,
            'page_one_en'  => $name_itm->page_one_en,
            'page_two_ar'  => $name_itm->page_two_ar,
            'page_two_en'  => $name_itm->page_two_en,
         ]);
      }
    }
}

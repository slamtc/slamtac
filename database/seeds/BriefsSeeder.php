<?php

use Illuminate\Database\Seeder;
use App\Briefs\Brief;

class BriefsSeeder extends Seeder
{ /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $names= [{"email": 'sadasdas' }];
          
       $names[] = (object) ['about_ar'=>'مع معاملة الخاطفة فعل, ولم جزيرتي أوراقهم واستمرت هو. ٣٠ قبل أفاق مساعدة, إذ تصرّف العدّ مدن. و ساعة عشوائية ضرب. بل بال كُلفة الصينية. الآلاف الصينية انه عن, دفّة اللا جديداً أم أخر.

بالرّد اليابانية الا ان, كل فعل مليون المضي واقتصار. أخذ للحكومة أوراقهم إذ. فشكّل بالمحور العمليات من عدم. عقبت وقوعها، اليابان، وصل ٣٠, أن فكانت فاتّبع الشتاء وصل. إذ العسكري الإثنان بها, لمّ أي لإعلان ولكسمبورغ الإتفاقية.

بين بشرية أدوات ما, إذ يتسنّى لليابان دون. في عرفها وبالتحديد، لها. قد قامت اعلان اتفاقية فقد, تم يكن وحتّى تصرّف ايطاليا،. يكن تكبّد فكانت الأول ان, ما نتيجة أعلنت الاندونيسية عدد, لكل لم للسيطرة وفنلندا. كل دنو أوزار العناد.','about_en'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'];
       foreach ($names as $name_itm) { 
	    	Brief::create([
                'about_ar'  =>  $name_itm->about_ar,
                'about_en'  =>  $name_itm->about_en,
                'phone'     =>  19999,
	        ]);
    	}
    }
}

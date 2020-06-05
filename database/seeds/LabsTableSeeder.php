<?php

use Illuminate\Database\Seeder;
use App\Labs\Lab;

class LabsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $names= [{"email": 'sadasdas' }];

$names[] = (object) [
	                 'user_id' => '17',
                     'lab_name_ar'=>'البرج',
                     'lab_name_en'=>'Albaraj',
                     'photo'=>'albaraj.jpg',
                     'rating'=>'4',
                     'information_ar'=>'نبذه  عن  معامل  البرج   ',
                     'information_en'=>'About Albaraj Labs',
                     'froms'=>'10:00',
                     'too'=>'06:00',
                     'price'=>'10:00',
                    ];
$names[] = (object) [
	                 'user_id' => '18',
                     'lab_name_ar'=>'الفا',
                     'lab_name_en'=>'Alfa',
                     'photo'=>'alfa.jpg',
                     'rating'=>'5',
                     'information_ar'=>'نبذه عن معامل الفا ',
                     'information_en'=>'About Alfa Labs',
                     'froms'=>'10:00',
                     'too'=>'06:00',
                     'price'=>'10:00',
                    ];

$names[] = (object) [
	                 'user_id' => '19',
                     'lab_name_ar'=>'المختبر',
                     'lab_name_en'=>'Almukhtabar',
                     'photo'=>'almukhtabar.jpg',
                     'rating'=>'1',
                     'information_ar'=>'نبذه عن معامل    المختبر',
                     'information_en'=>'About Almukhtabar Labs ',
                     'froms'=>'09:00',
                     'too'=>'05:00',
                     'price'=>'10:00',
                    ];
 $names[] = (object) [
	                 'user_id' => '20',
                     'lab_name_ar'=>'الشمس',
                     'lab_name_en'=>'Alshams',
                     'photo'=>'alshams.jpg',
                     'rating'=>'5',
                     'information_ar'=>'نبذه  عن معامل الشمس  ',
                     'information_en'=>'About Alshams Labs',
                     'froms'=>'10:00',
                     'too'=>'06:00',
                     'price'=>'10:00',
                    ];
                    
$names[] = (object) [
	                 'user_id' => '21',
                     'lab_name_ar'=>'حساب',
                     'lab_name_en'=>'Hisab',
                     'photo'=>'hisab.jpg',
                     'rating'=>'4',
                     'information_ar'=>'نبذه عن معامل حساب  ',
                     'information_en'=>'About Hisab Labs',
                     'froms'=>'01:00',
                     'too'=>'06:00',
                     'price'=>'10:00',
                    ];                                                                                                   

       
        foreach ($names as $name_itm) { 
	    	Lab::create([
	            'user_id'             => $name_itm->user_id,
	            'lab_name_ar'         => $name_itm->lab_name_ar,
                'lab_name_en'         => $name_itm->lab_name_en,
                'photo'               => $name_itm->photo,
                'rating'              => $name_itm->rating,
                'information_ar'      => $name_itm->information_ar,
                'information_en'      => $name_itm->information_en,
                'froms'               => $name_itm->froms,
                'too'                 => $name_itm->too,
                'price'               => $name_itm->price,
	        ]);
    	}
    }
}

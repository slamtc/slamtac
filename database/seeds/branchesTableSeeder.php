<?php

use Illuminate\Database\Seeder;
use App\Branche;

class branchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $names= [{"email": 'sadasdas' }];
          
       $names[] = (object) ['branche_ar'=>'الهرم','branche_en'=>'El-Harm','state_id'=>1];
       $names[] = (object) ['branche_ar'=>'الدقى','branche_en'=>'El-Doky','state_id'=>1];
       $names[] = (object) ['branche_ar'=>'مدينة نصر','branche_en'=>'Nacr City','state_id'=>1];
       $names[] = (object) ['branche_ar'=>'الثوره','branche_en'=>'El-Thwarw','state_id'=>1];
       $names[] = (object) ['branche_ar'=>'العبور','branche_en'=>'El-Aboor','state_id'=>1];
       $names[] = (object) ['branche_ar'=>'المعادى','branche_en'=>'El-Mida','state_id'=>1];
       $names[] = (object) ['branche_ar'=>'مصر الجديده','branche_en'=>'Misr-Elgdae','state_id'=>1];
       foreach ($names as $name_itm) { 
	    	Branche::create([
                'branche_ar'  =>  $name_itm->branche_ar,
                'branche_en'  =>  $name_itm->branche_en,
                'state_id'    =>  $name_itm->state_id,
	           
	        ]);
    	}
    }
}

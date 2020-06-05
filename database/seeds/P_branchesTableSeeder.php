<?php

use Illuminate\Database\Seeder;
use App\Pharmacy\P_branch;


class P_branchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names[] = (object) ['pharmacy_id' => 6,'branch_name_ar'=> 'حسن عمر  ','branch_name_en'=>'1980-03-10'];
        $names[] = (object) ['pharmacy_id' => 6,'branch_name_ar'=> 'حسن عمر  ','branch_name_en'=>'1980-03-10'];
        $names[] = (object) ['pharmacy_id' => 6,'branch_name_ar'=> 'حسن عمر  ','branch_name_en'=>'1980-03-10'];
        $names[] = (object) ['pharmacy_id' => 6,'branch_name_ar'=> 'حسن عمر  ','branch_name_en'=>'1980-03-10'];

        foreach ($names as $name_itm) { 
	    	P_branch::create([
	            'pharmacy_id'     => $name_itm->ppatient_id,
	            'branch_name_ar'  => $name_itm->ppatient_id,
	            'branch_name_en'  => $name_itm->ppatient_id,
	        ]);
    	}
    }
}

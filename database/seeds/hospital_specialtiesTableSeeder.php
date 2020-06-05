<?php

use Illuminate\Database\Seeder;
use App\Hospital\Hospital_specialtie;

class hospital_specialtiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
        $names[] = (object) ['hospital_id' => 1,'basic_specialties_id'=>1];
        $names[] = (object) ['hospital_id' => 1,'basic_specialties_id'=>3];
        $names[] = (object) ['hospital_id' => 1,'basic_specialties_id'=>2];

        $names[] = (object) ['hospital_id' => 3,'basic_specialties_id'=>2];
        $names[] = (object) ['hospital_id' => 4,'basic_specialties_id'=>2];
        $names[] = (object) ['hospital_id' => 5,'basic_specialties_id'=>2];
        $names[] = (object) ['hospital_id' => 6,'basic_specialties_id'=>2];
        $names[] = (object) ['hospital_id' => 7,'basic_specialties_id'=>2];
        $names[] = (object) ['hospital_id' => 8,'basic_specialties_id'=>2];


        foreach ($names as $name_itm) { 
	    	Hospital_specialtie::create([
	            'hospital_id'           => $name_itm->hospital_id,
	            'basic_specialties_id'  => $name_itm->basic_specialties_id,
	        ]);
    	}
    }
}

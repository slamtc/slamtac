<?php

use Illuminate\Database\Seeder;
use App\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $names  = array('Misr El Grdad'=>'مصر الجديده ','Nacr City'=>'مدينة نصر','El-madia'=>'المعادى');
        foreach ($names as $key=>$name_itm) { 
            City::create([
                'state_id' => 1,
                'ci_name_ar' => $name_itm,
                'ci_name_en' => $key
            ]);
        }
    }
}

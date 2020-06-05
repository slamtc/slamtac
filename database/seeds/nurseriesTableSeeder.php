<?php

use Illuminate\Database\Seeder;
use App\Hospital\Nursery;

class nurseriesTableSeeder extends Seeder
{/**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $variable =  array('4','5' );
        foreach ($variable as $key) {
            Nursery::create([
              'hospital_id'  => $key,
              'cl_price'     => 700,
              'status'       => 0,
            ]);
        }
       	
    }
}

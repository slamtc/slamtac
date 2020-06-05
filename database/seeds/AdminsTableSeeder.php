<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminsTableSeeder extends Seeder
{
    public function run()
    {
		Admin::create([
		    'email' => 'admin@hotmail.com',
		    'password' => bcrypt('12345678'),
		    'phone' => '123456789',
		]);        
    }
}

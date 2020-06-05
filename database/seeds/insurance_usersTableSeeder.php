<?php

use Illuminate\Database\Seeder;
use App\Insurance_user;

class insurance_usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $names= [{"email": 'sadasdas' }];
          
       $names[] = (object) ['user_id' => 17,'company_id'=> 1];
       $names[] = (object) ['user_id' => 17,'company_id'=> 2];
       $names[] = (object) ['user_id' => 17,'company_id'=> 3];
       
       $names[] = (object) ['user_id' => 21,'company_id'=> 1];
       $names[] = (object) ['user_id' => 18,'company_id'=> 2];
       $names[] = (object) ['user_id' => 18,'company_id'=> 3];
       $names[] = (object) ['user_id' => 18,'company_id'=> 4];
$names[] = (object) ['user_id' => 17,'company_id'=> 4];
       
       $names[] = (object) ['user_id' => 19,'company_id'=> 1];
       $names[] = (object) ['user_id' => 19,'company_id'=> 4];
      $names[] = (object) ['user_id' => 18,'company_id'=> 3];
       $names[] = (object) ['user_id' => 20,'company_id'=> 4];
       $names[] = (object) ['user_id' => 20,'company_id'=> 1];
       $names[] = (object) ['user_id' => 20,'company_id'=> 2];
$names[] = (object) ['user_id' => 19,'company_id'=> 3];
       $names[] = (object) ['user_id' => 21,'company_id'=> 2];
       
       $names[] = (object) ['user_id' => 21,'company_id'=> 3];
       
       
       
       
      
       

       
        foreach ($names as $name_itm) { 
	    	Insurance_user::create([
	            'user_id'  => $name_itm->user_id,
	            'company_id'  => $name_itm->company_id,
	        ]);
    	}
    }
}

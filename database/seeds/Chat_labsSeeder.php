<?php

use Illuminate\Database\Seeder;
use App\Chats\Chat_lab;

class Chat_labsSeeder extends Seeder
{
   
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$names[] = (object) ['sender_id' => 18,'recipient_id'=> 6,'labs_branche_id'=> 6,'message'=> 'السلام عليكم'];

      

         foreach ($names as $name_itm) { 
	    	Chat_lab::create([
	            'sender_id'       => $name_itm->sender_id,
	            'recipient_id'     => $name_itm->recipient_id,
	            'labs_branche_id'  => $name_itm->labs_branche_id,
	            'message'       => $name_itm->message,
	            'seen'          => 1,
	        ]);
    	}
    }
}

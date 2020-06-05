<?php

use Illuminate\Database\Seeder;
use App\Smallreservation;

class smallreservationsTableSeeder extends Seeder
{

/**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$names[] = (object) ['reservation_id' => 1,'from'=>'12:30:00'];
        $names[] = (object) ['reservation_id' => 1,'from'=>'01:00:00'];
        $names[] = (object) ['reservation_id' => 1,'from'=>'01:30:00'];
        $names[] = (object) ['reservation_id' => 1,'from'=>'02:00:00'];
        $names[] = (object) ['reservation_id' => 1,'from'=>'02:30:00'];
        $names[] = (object) ['reservation_id' => 1,'from'=>'03:00:00'];
        $names[] = (object) ['reservation_id' => 1,'from'=>'03:30:00'];
        $names[] = (object) ['reservation_id' => 1,'from'=>'04:00:00'];
        $names[] = (object) ['reservation_id' => 1,'from'=>'04:30:00'];

        $names[] = (object) ['reservation_id' => 2,'from'=>'12:30:00'];
        $names[] = (object) ['reservation_id' => 2,'from'=>'01:00:00'];
        $names[] = (object) ['reservation_id' => 2,'from'=>'01:30:00'];
        $names[] = (object) ['reservation_id' => 2,'from'=>'02:00:00'];
        $names[] = (object) ['reservation_id' => 2,'from'=>'02:30:00'];
        $names[] = (object) ['reservation_id' => 2,'from'=>'03:00:00'];
        $names[] = (object) ['reservation_id' => 2,'from'=>'03:30:00'];
        $names[] = (object) ['reservation_id' => 2,'from'=>'04:00:00'];
        $names[] = (object) ['reservation_id' => 2,'from'=>'04:30:00'];


        $names[] = (object) ['reservation_id' => 3,'from'=>'12:30:00'];
        $names[] = (object) ['reservation_id' => 3,'from'=>'01:00:00'];
        $names[] = (object) ['reservation_id' => 3,'from'=>'01:30:00'];
        $names[] = (object) ['reservation_id' => 3,'from'=>'02:00:00'];
        $names[] = (object) ['reservation_id' => 3,'from'=>'02:30:00'];
        $names[] = (object) ['reservation_id' => 3,'from'=>'03:00:00'];
        $names[] = (object) ['reservation_id' => 3,'from'=>'03:30:00'];
        $names[] = (object) ['reservation_id' => 3,'from'=>'04:00:00'];
        $names[] = (object) ['reservation_id' => 3,'from'=>'04:30:00'];

        $names[] = (object) ['reservation_id' => 4,'from'=>'12:30:00'];
        $names[] = (object) ['reservation_id' => 4,'from'=>'01:00:00'];
        $names[] = (object) ['reservation_id' => 4,'from'=>'01:30:00'];
        $names[] = (object) ['reservation_id' => 4,'from'=>'02:00:00'];
        $names[] = (object) ['reservation_id' => 4,'from'=>'02:30:00'];
        $names[] = (object) ['reservation_id' => 4,'from'=>'03:00:00'];
        $names[] = (object) ['reservation_id' => 4,'from'=>'03:30:00'];
        $names[] = (object) ['reservation_id' => 4,'from'=>'04:00:00'];
        $names[] = (object) ['reservation_id' => 4,'from'=>'04:30:00'];

        $names[] = (object) ['reservation_id' => 5,'from'=>'12:30:00'];
        $names[] = (object) ['reservation_id' => 5,'from'=>'01:00:00'];
        $names[] = (object) ['reservation_id' => 5,'from'=>'01:30:00'];
        $names[] = (object) ['reservation_id' => 5,'from'=>'02:00:00'];
        $names[] = (object) ['reservation_id' => 5,'from'=>'02:30:00'];
        $names[] = (object) ['reservation_id' => 5,'from'=>'03:00:00'];
        $names[] = (object) ['reservation_id' => 5,'from'=>'03:30:00'];
        $names[] = (object) ['reservation_id' => 5,'from'=>'04:00:00'];
        $names[] = (object) ['reservation_id' => 5,'from'=>'04:30:00'];

        $names[] = (object) ['reservation_id' => 6,'from'=>'12:30:00'];
        $names[] = (object) ['reservation_id' => 6,'from'=>'01:00:00'];
        $names[] = (object) ['reservation_id' => 6,'from'=>'01:30:00'];
        $names[] = (object) ['reservation_id' => 6,'from'=>'02:00:00'];
        $names[] = (object) ['reservation_id' => 6,'from'=>'02:30:00'];
        $names[] = (object) ['reservation_id' => 6,'from'=>'03:00:00'];
        $names[] = (object) ['reservation_id' => 6,'from'=>'03:30:00'];
        $names[] = (object) ['reservation_id' => 6,'from'=>'04:00:00'];
        $names[] = (object) ['reservation_id' => 6,'from'=>'04:30:00'];

        $names[] = (object) ['reservation_id' => 7,'from'=>'02:00:00'];
        $names[] = (object) ['reservation_id' => 7,'from'=>'03:00:00'];
        $names[] = (object) ['reservation_id' => 7,'from'=>'04:00:00'];
        $names[] = (object) ['reservation_id' => 7,'from'=>'05:00:00'];
        $names[] = (object) ['reservation_id' => 7,'from'=>'06:00:00'];
        $names[] = (object) ['reservation_id' => 7,'from'=>'07:00:00'];

        $names[] = (object) ['reservation_id' => 8,'from'=>'02:00:00'];
        $names[] = (object) ['reservation_id' => 8,'from'=>'03:00:00'];
        $names[] = (object) ['reservation_id' => 8,'from'=>'04:00:00'];
        $names[] = (object) ['reservation_id' => 8,'from'=>'05:00:00'];
        $names[] = (object) ['reservation_id' => 8,'from'=>'06:00:00'];
        $names[] = (object) ['reservation_id' => 8,'from'=>'07:00:00'];

        $names[] = (object) ['reservation_id' => 9,'from'=>'02:00:00'];
        $names[] = (object) ['reservation_id' => 9,'from'=>'03:00:00'];
        $names[] = (object) ['reservation_id' => 9,'from'=>'04:00:00'];
        $names[] = (object) ['reservation_id' => 9,'from'=>'05:00:00'];
        $names[] = (object) ['reservation_id' => 9,'from'=>'06:00:00'];
        $names[] = (object) ['reservation_id' => 9,'from'=>'07:00:00'];

        $names[] = (object) ['reservation_id' => 10,'from'=>'02:00:00'];
        $names[] = (object) ['reservation_id' => 10,'from'=>'03:00:00'];
        $names[] = (object) ['reservation_id' => 10,'from'=>'04:00:00'];
        $names[] = (object) ['reservation_id' => 10,'from'=>'05:00:00'];
        $names[] = (object) ['reservation_id' => 10,'from'=>'06:00:00'];
        $names[] = (object) ['reservation_id' => 10,'from'=>'07:00:00'];

        $names[] = (object) ['reservation_id' => 11,'from'=>'02:00:00'];
        $names[] = (object) ['reservation_id' => 11,'from'=>'03:00:00'];
        $names[] = (object) ['reservation_id' => 11,'from'=>'04:00:00'];
        $names[] = (object) ['reservation_id' => 11,'from'=>'05:00:00'];
        $names[] = (object) ['reservation_id' => 11,'from'=>'06:00:00'];
        $names[] = (object) ['reservation_id' => 11,'from'=>'07:00:00'];

        $names[] = (object) ['reservation_id' => 12,'from'=>'02:00:00'];
        $names[] = (object) ['reservation_id' => 12,'from'=>'03:00:00'];
        $names[] = (object) ['reservation_id' => 12,'from'=>'04:00:00'];
        $names[] = (object) ['reservation_id' => 12,'from'=>'05:00:00'];
        $names[] = (object) ['reservation_id' => 12,'from'=>'06:00:00'];
        $names[] = (object) ['reservation_id' => 12,'from'=>'07:00:00'];

       



        foreach ($names as $name_itm) { 
	    	Smallreservation::create([
	            'reservation_id' => $name_itm->reservation_id,
	            'from' => $name_itm->from,
	        ]);
    	}
    }
}

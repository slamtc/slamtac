<?php

use Illuminate\Database\Seeder;
use App\Reservation;

class reservationsTableSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$names[] = (object) ['doctor_id' => 1,'appointment'=> '2020-03-28','from'=>'12:30:00','to'=>'05:00:00','status'=>0];
		$names[] = (object) ['doctor_id' => 1,'appointment'=> '2020-04-01','from'=>'12:30:00','to'=>'05:00:00','status'=>0];
		$names[] = (object) ['doctor_id' => 1,'appointment'=> '2020-04-02','from'=>'12:30:00','to'=>'05:00:00','status'=>0];
		$names[] = (object) ['doctor_id' => 1,'appointment'=> '2020-04-03','from'=>'12:30:00','to'=>'05:00:00','status'=>0];
		$names[] = (object) ['doctor_id' => 1,'appointment'=> '2020-04-04','from'=>'12:30:00','to'=>'05:00:00','status'=>0];
		$names[] = (object) ['doctor_id' => 1,'appointment'=> '2020-04-05','from'=>'12:30:00','to'=>'05:00:00','status'=>0];

		$names[] = (object) ['doctor_id' => 2,'appointment'=> '2020-03-28','from'=>'02:00:00','to'=>'08:00:00','status'=>0];
		$names[] = (object) ['doctor_id' => 2,'appointment'=> '2020-04-01','from'=>'02:00:00','to'=>'08:00:00','status'=>0];
		$names[] = (object) ['doctor_id' => 2,'appointment'=> '2020-04-02','from'=>'02:00:00','to'=>'08:00:00','status'=>0];
		$names[] = (object) ['doctor_id' => 2,'appointment'=> '2020-04-03','from'=>'02:00:00','to'=>'08:00:00','status'=>0];
		$names[] = (object) ['doctor_id' => 2,'appointment'=> '2020-04-04','from'=>'02:00:00','to'=>'08:00:00','status'=>0];
		$names[] = (object) ['doctor_id' => 2,'appointment'=> '2020-04-05','from'=>'02:00:00','to'=>'08:00:00','status'=>0];

		$names[] = (object) ['doctor_id' => 3,'appointment'=> '2020-03-28','from'=>'02:12:23','to'=>'08:12:23','status'=>0];
		$names[] = (object) ['doctor_id' => 3,'appointment'=> '2020-04-01','from'=>'02:12:23','to'=>'08:12:23','status'=>0];
		$names[] = (object) ['doctor_id' => 3,'appointment'=> '2020-04-02','from'=>'02:12:23','to'=>'08:12:23','status'=>0];
		$names[] = (object) ['doctor_id' => 3,'appointment'=> '2020-04-03','from'=>'02:12:23','to'=>'08:12:23','status'=>0];
		$names[] = (object) ['doctor_id' => 3,'appointment'=> '2020-04-04','from'=>'02:12:23','to'=>'08:12:23','status'=>0];

		$names[] = (object) ['doctor_id' => 4,'appointment'=> '2020-03-28','from'=>'02:12:23','to'=>'08:12:23','status'=>0];
		$names[] = (object) ['doctor_id' => 4,'appointment'=> '2020-04-01','from'=>'02:12:23','to'=>'08:12:23','status'=>0];
		$names[] = (object) ['doctor_id' => 4,'appointment'=> '2020-04-02','from'=>'02:12:23','to'=>'08:12:23','status'=>0];
		$names[] = (object) ['doctor_id' => 4,'appointment'=> '2020-04-04','from'=>'02:12:23','to'=>'08:12:23','status'=>0];

		$names[] = (object) ['doctor_id' => 5,'appointment'=> '2020-04-06','from'=>'02:12:23','to'=>'08:12:23','status'=>0];
		$names[] = (object) ['doctor_id' => 5,'appointment'=> '2020-04-07','from'=>'02:12:23','to'=>'08:12:23','status'=>0];
        foreach ($names as $name_itm) { 
	    	Reservation::create([
	            'doctor_id'  => $name_itm->doctor_id,
	            'appointment'  => $name_itm->appointment,
	            'from'  => $name_itm->from,
	            'to'  => $name_itm->to,
	            'status'  => $name_itm->status,
	        ]);
    	}
    }
}

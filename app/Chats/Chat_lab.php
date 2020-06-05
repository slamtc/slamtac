<?php

namespace App\Chats;
use Auth;
use DB;

use Illuminate\Database\Eloquent\Model;

class Chat_lab extends Model
{
    protected $fillable=['sender_id','recipient_id','labs_branche_id','message','seen','room','patient_id'];

    protected $hidden = [
         'updated_at',
    ];  

    public function sender()
    {
        return $this->belongsTo('App\Labs\Lab','sender_id','user_id');
    }

   
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }
}

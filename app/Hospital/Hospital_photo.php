<?php

namespace App\Hospital;

use Illuminate\Database\Eloquent\Model;

class Hospital_photo extends Model
{
    protected $fillable=['user_id','photo'];


    protected $hidden = [
        'created_at', 'updated_at','photo','user_id'
    ];

    protected $appends = ['photos'];


    public function getPhotosAttribute()
    {
        return 'hospitals/'. $this->photo;

    }//end of get image path
}

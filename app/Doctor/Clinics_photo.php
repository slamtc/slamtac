<?php

namespace App\Doctor;

use Illuminate\Database\Eloquent\Model;

class Clinics_photo extends Model
{
    protected $fillable=['clinic_id','photo'];


    protected $hidden = [
        'created_at', 'updated_at','photo','user_id'
    ];


    protected $appends = ['photos'];


    public function getPhotosAttribute()
    {
        return 'clinics/'. $this->photo;

    }//end of get image path
}

<?php

namespace App\Doctor;

use Illuminate\Database\Eloquent\Model;

class Certificates_photo extends Model
{
    protected $fillable=['certificate_id','photo'];
    

    protected $hidden = [
        'created_at', 'updated_at','photo'
    ]; 

    protected $appends = ['photos'];


    public function getPhotosAttribute()
    {
        return 'certificates/'. $this->photo;

    }//end of get image path
}

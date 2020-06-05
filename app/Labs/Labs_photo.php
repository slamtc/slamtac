<?php

namespace App\Labs;

use Illuminate\Database\Eloquent\Model;

class Labs_photo extends Model
{
    protected $fillable=['user_id','photo'];
    


    protected $hidden = [
        'created_at', 'updated_at','photo',
    ];

    protected $appends = ['photos'];


    public function getPhotosAttribute()
    {
        return ('labs/' . $this->photo);

    }//end of image path attribute
      
}

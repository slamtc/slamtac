<?php

namespace App\Labs;

use Illuminate\Database\Eloquent\Model;

class Labs_slider extends Model
{
    protected $fillable=['user_id','image'];

    protected $hidden = [
        'created_at', 'updated_at','image','lab_id',
    ];


    protected $appends = ['images'];


    public function getImagesAttribute()
    {
        return 'labs/'. $this->image;

    }//end of get image path
}

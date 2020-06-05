<?php

namespace App\Pharmacy;

use Illuminate\Database\Eloquent\Model;

class Pharmacy_slider extends Model
{
    protected $fillable=['user_id','image'];

    protected $hidden = [
        'created_at', 'updated_at','image','user_id'
    ];


    protected $appends = ['images'];


    public function getImagesAttribute()
    {
        return 'sliders/'. $this->image;

    }//end of get image path
}

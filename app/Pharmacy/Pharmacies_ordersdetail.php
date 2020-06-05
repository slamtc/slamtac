<?php

namespace App\Pharmacy;

use Illuminate\Database\Eloquent\Model;

class Pharmacies_ordersdetail extends Model
{
    protected $guarded = ['id'];

    protected $hidden = [
        'created_at', 'updated_at','images',
    ];

    protected $appends = ['image_path'];


    public function getImagePathAttribute()
    {  
    	if($this->images != '')
        return ('medicine/' . $this->images);
        else
        return ''; 

    }//end of image path attribute
}

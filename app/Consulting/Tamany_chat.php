<?php

namespace App\Consulting;

use Illuminate\Database\Eloquent\Model;

class Tamany_chat extends Model
{
    protected $fillable=['consulting_id','doctor_id','message','seen','type','photo'];

    protected $hidden = [
        'created_at', 'updated_at','photo'
    ];

    protected $appends = ['image'];


    public function getImageAttribute()
    {  
       if($this->photo)
       {
         return asset('images/tamny/' . $this->photo);	
       }else
       {
       	 return '';
       }	
        
    }
// public function getImagePathAttribute()
//     {
//         return $this->image ? asset('storage') . '/' . $this->image : asset('') . '/image/4swthq9VIR.png';
//     }

    
}

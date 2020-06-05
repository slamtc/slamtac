<?php

namespace App\Pharmacy;

use Illuminate\Database\Eloquent\Model;

class Pharmacies_order extends Model
{
    protected $fillable=['patient_id','pharmacy_id','latitude','longitude','name','phone','adress','special_marque','note','code','discount','status'];

    protected $hidden = [
         'updated_at','timediff',
    ];


    protected $appends = ['time'];


    public function getTimeAttribute()
    {
    	if($this->timediff >= 1 && $this->timediff <= 60)
    	{
    	  return $this->timediff . 's';	
    	}
    	elseif($this->timediff >= 60 && $this->timediff <= 3600)
    	{
          return round($this->timediff / 60,2) . ' m';
    	}
    	elseif($this->timediff >= 3600 && $this->timediff <= 86400)
    	{
          return round($this->timediff / 3600,2) . ' h';
    	}
    	elseif($this->timediff >= 86400 && $this->timediff <= 2592000)
    	{
          return round($this->timediff / 86400,0) . ' d';
    	}else
    	{
    		return 0;
    	}
        

    }//end of get image path


    public function ordersdetail()
    {  
       return $this->hasMany('App\Pharmacy\Pharmacies_ordersdetail');
    }
}

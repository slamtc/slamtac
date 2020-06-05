<?php

namespace App\Hospital;

use Illuminate\Database\Eloquent\Model;

class Nursery extends Model
{
    protected $fillable=['hospital_id','cl_price','status','appointment'];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','hospital_id');
    }
}

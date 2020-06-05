<?php

namespace App\Pharmacy;

use Illuminate\Database\Eloquent\Model;

class P_branch extends Model
{
    protected $fillable=['pharmacy_id','branch_name_ar','branch_name_en'];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}

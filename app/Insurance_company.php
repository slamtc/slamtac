<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurance_company extends Model
{
    protected $fillable=['company_name_ar','company_name_en'];

     protected $hidden = [
        'created_at', 'updated_at',
    ];
    
}

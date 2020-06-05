<?php

namespace App\Pharmacy;

use Illuminate\Database\Eloquent\Model;

class Pharmacies_view extends Model
{
    protected $fillable=['pharmacies_branch_id','token_device'];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}

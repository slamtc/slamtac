<?php

namespace App\Labs;

use Illuminate\Database\Eloquent\Model;

class Labs_service extends Model
{
    protected $fillable=['services_list_id','lab_id'];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

}

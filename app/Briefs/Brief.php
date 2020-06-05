<?php

namespace App\Briefs;

use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    protected $fillable=['about_ar','about_en'];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

}

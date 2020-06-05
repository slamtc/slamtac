<?php

namespace App\Patient;

use Illuminate\Database\Eloquent\Model;

class Bookforother extends Model
{
    protected $fillable=['patient_id','name','phone','type','bookig_id','h_or_d'];
}

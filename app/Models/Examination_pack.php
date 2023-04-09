<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examination_pack extends Model
{
    use HasFactory;

    function examinations(){
        return $this->hasMany('App\Models\Examination');
    }
}

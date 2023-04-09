<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tcf_canada_ce extends Model
{
    use HasFactory;

    protected $fillabe = [
        // if error, remove the property name
        'tfc_canada_id','name'
    ];
}

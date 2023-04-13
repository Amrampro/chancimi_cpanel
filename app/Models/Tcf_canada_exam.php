<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tcf_canada_exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tcf_canada_id',
        'pts_ce',
        'pts_co',
        'pts_ee',
        'pts_eo',
        'matricule',
        'state'
    ];
}

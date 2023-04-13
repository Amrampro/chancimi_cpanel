<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tcf_canada_ee_answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'tcf_canada_ees_id',
        'tcf_canada_exams_id',
        'answer'
    ];
}

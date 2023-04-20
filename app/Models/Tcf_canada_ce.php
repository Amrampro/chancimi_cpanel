<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tcf_canada_ce extends Model
{
    use HasFactory;

    protected $fillable = [
        'tcf_canadas_id',
        'question_number',
        'question',
        'answer'
    ];
}

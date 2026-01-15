<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'work_date',
        'care_start',
        'person_no',
    ];

    protected $casts = [
        'work_date'  => 'date',
        'care_start' => 'datetime',
    ];
}

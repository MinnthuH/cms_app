<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    protected $fillable = [
        'hall_id',
        'seat_number',
        'photo',
        'seat_status',
        'price',
        'seat_type',
        'status',
        'description',
    ];
}

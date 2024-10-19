<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'phone',
        'email',
        'address',
        'social_url',
        'status',
        'description',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'photo',
        'movie_catgory_id',
        'duration',
        'synopsis',
        'trailer',
        'tag',
    ];
}

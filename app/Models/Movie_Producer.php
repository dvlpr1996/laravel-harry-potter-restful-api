<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie_Producer extends Model
{
    use HasFactory;

    protected $hidden = ['created_at', 'updated_at'];

    protected $fillable = [
        'movie_id',
        'producer_id'
    ];
}

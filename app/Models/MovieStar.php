<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieStar extends Model
{
    use HasFactory;

    protected $table = 'movie_star';

    protected $fillable = [
        'star_id',
        'movie_id'
    ];

    protected $hidden = ['pivot', 'created_at', 'updated_at', 'id'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieProducer extends Model
{
    use HasFactory;

    protected $table = 'movie_producer';
    
    protected $hidden = ['created_at', 'updated_at'];

    protected $fillable = [
        'movie_id',
        'producer_id'
    ];
}

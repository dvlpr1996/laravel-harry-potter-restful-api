<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Potion extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'color',
        'effect',
        'difficulty',
        'ingredients',
    ];

    protected $hidden = ['created_at', 'updated_at'];
}

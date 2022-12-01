<?php

namespace App\Models;

use App\Models\Feature;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class House extends Model
{
    use HasFactory;

    protected $hidden = ['created_at', 'updated_at'];

    protected $fillable = [
        'name',
        'slug',
        'color',
        'animal',
        'slogan',
        'element',
        'founder',
        'ghost_name',
        'banner_path',
        'common_room_entrance',
        'common_room_location',
    ];

    public function features()
    {
        return $this->hasMany(Feature::class);
    }
}

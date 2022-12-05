<?php

namespace App\Models;

use App\Models\Feature;
use Illuminate\Support\Facades\Config;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class House extends Model
{
    use HasFactory;

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

    protected $hidden = ['created_at', 'updated_at'];

    public function features()
    {
        return $this->hasMany(Feature::class);
    }

    protected function bannerPath(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Config::get('app.url') . '/storage/' . $value
        );
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'type',
        'ISBN',
        'title',
        'genre',
        'pages',
        'author',
        'country',
        'summary',
        'language',
        'cover_path',
        'series_number',
        'book_info_url',
        'us_publish_date',
        'uk_publish_date'
    ];
    protected $hidden = ['created_at', 'updated_at'];

    public function publishers()
    {
        return $this->belongsToMany(Publisher::class);
    }

    protected function seriesNumber(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value . 'st in series'
        );
    }

    protected function pages(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value . ' pages'
        );
    }
}

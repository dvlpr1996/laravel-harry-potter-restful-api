<?php

namespace App\Models;

use App\Models\Star;
use App\Models\Producer;
use Illuminate\Support\Facades\Config;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory;

    protected $hidden = ['created_at', 'updated_at'];

    protected $fillable = [
        'slug',
        'title',
        'budget',
        'poster',
        'director',
        'us_rating',
        'uk_rating',
        'box_office',
        'release_date',
        'running_time',
        'novel_writer',
        'screenplay_writer',
    ];

    public function stars()
    {
        return $this->belongsToMany(Star::class);
    }

    public function producers()
    {
        return $this->belongsToMany(Producer::class);
    }

    protected function runningTime(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value . ' minutes'
        );
    }

    protected function budget(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->moneyFormat($value)
        );
    }

    protected function boxOffice(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->moneyFormat($value)
        );
    }

    protected function poster(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Config::get('app.url') . '/storage/' . $value
        );
    }

    private function moneyFormat(string $number): string
    {
        $number = str_replace(",", "", $number);
        if (!is_numeric($number)) return false;

        if ($number > 1000000000) {
            $number =  $number / 1000000;
            return '$' . number_format($number) . ' billion';
        }

        if ($number > 100000000) {
            $number =  $number / 1000000;
            return '$' . $number . ' million';
        }

        return '';
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'type',
        'house',
        'gender',
        'species',
        'patronus',
        'is_alive',
        'ancestry',
        'wand_core',
        'is_wizard',
        'date_of_birth',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    protected function isWizard(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ($value == 0) ? $value = 'no' : $value = 'yes'
        );
    }

    protected function isAlive(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ($value == 0) ? $value = 'dead' : $value = 'alive'
        );
    }

    protected function type(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->selectCharacterType($value)
        );
    }

    private function selectCharacterType($value): string
    {
        if ($value == 0)
            return 'student';

        if ($value == 1)
            return 'staff';

        if ($value == 2)
            return 'others';

        return '';
    }

    public function scopeOtherCharacters(Builder $query): void
    {
        $query->where('type', '2');
    }

    public function scopeStaff(Builder $query): void
    {
        $query->where('type', '1');
    }

    public function scopeStudent(Builder $query): void
    {
        $query->where('type', '0');
    }
}

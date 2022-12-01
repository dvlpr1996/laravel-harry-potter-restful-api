<?php

namespace App\Models;

use App\Models\House;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feature extends Model
{
    use HasFactory;

    protected $hidden = ['created_at', 'updated_at'];

    protected $fillable = [
        'feature',
        'house_id'
    ];

    public function house()
    {
        return $this->belongsTo(House::class);
    }
}

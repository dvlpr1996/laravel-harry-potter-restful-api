<?php

namespace App\Models;

use App\Models\House;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = ['feature', 'house_id'];
    protected $hidden = ['created_at', 'updated_at'];

    public function house()
    {
        return $this->belongsTo(House::class);
    }
}

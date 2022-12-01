<?php

namespace App\Models;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Star extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected $hidden = ['created_at', 'updated_at'];
    
    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }
}

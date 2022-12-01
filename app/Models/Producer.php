<?php

namespace App\Models;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected $hidden = ['pivot', 'created_at', 'updated_at', 'id'];
    
    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }
}

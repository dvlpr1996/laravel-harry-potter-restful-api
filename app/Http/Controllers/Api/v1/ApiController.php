<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class ApiController extends Controller
{
    public function index()
    {
        $data = [
            'staff' => Config::get('app.url') . '/api/v1/staff',
            'books' => Config::get('app.url') . '/api/v1/books',
            'houses' => Config::get('app.url') . '/api/v1/houses',
            'movies' => Config::get('app.url') . '/api/v1/movies',
            'spells' => Config::get('app.url') . '/api/v1/spells',
            'potions' => Config::get('app.url') . '/api/v1/potions',
            'students' => Config::get('app.url') . '/api/v1/students',
            'characters' => Config::get('app.url') . '/api/v1/characters',
        ];

        return $data;
    }
}

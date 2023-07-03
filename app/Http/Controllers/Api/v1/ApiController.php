<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function index()
    {
        $data = [
            'books' => config('app.url') . config('api.v1.ver uri') . 'books',
            'staffs' => config('app.url') . config('api.v1.ver uri') . 'staffs',
            'movies' => config('app.url') . config('api.v1.ver uri') . 'movies',
            'spells' => config('app.url') . config('api.v1.ver uri') . 'spells',
            'houses' => config('app.url') . config('api.v1.ver uri') . 'houses',
            'potions' => config('app.url') . config('api.v1.ver uri') . 'potions',
            'peoples' => config('app.url') . config('api.v1.ver uri') . 'peoples',
            'students' => config('app.url') . config('api.v1.ver uri') . 'students',
            'characters' => config('app.url') . config('api.v1.ver uri') . 'characters',
        ];

        return $data;
    }
}

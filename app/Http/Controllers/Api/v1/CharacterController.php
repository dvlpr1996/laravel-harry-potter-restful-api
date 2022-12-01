<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Character;
use App\Http\Controllers\Controller;
use App\Http\Resources\CharacterResource;
use App\Http\Resources\CharacterCollection;

class CharacterController extends Controller
{
    public function index()
    {
        return new CharacterCollection(Character::paginate(10));
    }

    public function show($id)
    {
        return new CharacterResource(Character::findOrFail($id));
    }
}

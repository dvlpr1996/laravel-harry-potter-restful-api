<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Character;
use App\Traits\ApiHandleRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\CharacterResource;
use App\Http\Resources\CharacterCollection;

class NormalCharacterController extends Controller
{
    use ApiHandleRequest;

    public function __construct()
    {
        $this->apiHandleRequestTraitNameSpaceSetter('character');
    }

    public function index()
    {
        $normalChar = Character::where('type', '2')->paginate(10);
        return new CharacterCollection($normalChar);
    }

    public function show($character)
    {
        if ($this->isIdRequest($character)) {
            $normalChar = Character::where('type', '2')->where('id', $character)->first();
            return new CharacterResource($normalChar);
        }


        if ($this->isSlugRequest($character)) {
            $normalChar = Character::where('type', '2')->where('slug', $character)->first();
            return new CharacterResource($normalChar);
        }
    }
}

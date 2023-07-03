<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Character;
use App\Traits\ApiHandleRequest;
use App\Http\Controllers\Controller;

class NormalCharacterController extends Controller
{
    use ApiHandleRequest;

    public function __construct()
    {
        $this->apiHandleRequestTraitNameSpaceSetter('character');
    }

    public function index()
    {
        return $this->showApiDataCollection(Character::OtherCharacters()->paginate(10));
    }

    public function show($character)
    {
        if ($this->isIdRequest($character)) {
            $normalChar = Character::OtherCharacters()->where('id', $character)->firstOrFail();
            return $this->showApiDataResource($normalChar);
        }


        if ($this->isSlugRequest($character)) {
            $normalChar = Character::OtherCharacters()->where('slug', $character)->firstOrFail();
            return $this->showApiDataResource($normalChar);
        }
    }
}

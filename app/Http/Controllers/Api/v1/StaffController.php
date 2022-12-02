<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Character;
use App\Traits\ApiHandleRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\CharacterResource;
use App\Http\Resources\CharacterCollection;

class StaffController extends Controller
{
    use ApiHandleRequest;

    public function __construct()
    {
        $this->apiHandleRequestTraitNameSpaceSetter('character');
    }

    public function index()
    {
        $houseFeature = Character::where('type', '1')->get();
        return new CharacterCollection($houseFeature);
    }

    public function show($character)
    {
        if ($this->isIdRequest($character)) {
            $houseFeature = Character::where('type', '1')->where('id', $character)->first();
            return new CharacterResource($houseFeature);
        }


        if ($this->isSlugRequest($character)) {
            $houseFeature = Character::where('type', '1')->where('slug', $character)->first();
            return new CharacterResource($houseFeature);
        }
    }

}

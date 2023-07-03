<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Character;
use Illuminate\Http\Request;
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
        $houseFeature = Character::Staff()->paginate(10);
        return $this->showApiDataCollection($houseFeature);
    }

    public function show($character)
    {
        if ($this->isIdRequest($character)) {
            $houseFeature = Character::Staff()->where('id', $character)->firstOrFail();
            return $this->showApiDataResource($houseFeature);
        }


        if ($this->isSlugRequest($character)) {
            $houseFeature = Character::where('type', '1')->where('slug', $character)->firstOrFail();
            return $this->showApiDataResource($houseFeature);
        }
    }
}

<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Character;
use App\Traits\ApiHandleRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\CharacterResource;
use App\Http\Resources\CharacterCollection;

class StudentController extends Controller
{
    use ApiHandleRequest;

    public function __construct()
    {
        $this->apiHandleRequestTraitNameSpaceSetter('character');
    }

    public function index()
    {
        $student = Character::where('type', '0')->paginate(10);
        return new CharacterCollection($student);
    }

    public function show($character)
    {
        if ($this->isIdRequest($character)) {
            $student = Character::where('type', '0')->where('id', $character)->first();
            return new CharacterResource($student);
        }


        if ($this->isSlugRequest($character)) {
            $student = Character::where('type', '0')->where('slug', $character)->first();
            return new CharacterResource($student);
        }
    }
}

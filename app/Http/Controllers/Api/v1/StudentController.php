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
        $student = Character::student()->paginate(10);
        return $this->showApiDataCollection($student);
    }

    public function show($character)
    {
        if ($this->isIdRequest($character)) {
            $student = Character::student()->where('id', $character)->firstOrFail();
            return $this->showApiDataResource($student);
        }


        if ($this->isSlugRequest($character)) {
            $student = Character::student()->where('slug', $character)->firstOrFail();
            return $this->showApiDataResource($student);
        }
    }
}

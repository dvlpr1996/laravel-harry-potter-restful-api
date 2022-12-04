<?php

namespace App\Http\Controllers\Api\v1;

use App\Traits\ApiHandleRequest;
use App\Http\Controllers\Controller;

class CharacterController extends Controller
{
    use ApiHandleRequest;

    public function __construct()
    {
        $this->apiHandleRequestTraitNameSpaceSetter('character');
    }

    public function index()
    {
        return $this->showApiDataCollectionWithPagination();
    }

    public function show($character)
    {
        return $this->showApiData($character);
    }
}

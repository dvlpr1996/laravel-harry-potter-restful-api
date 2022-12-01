<?php

namespace App\Http\Controllers\Api\v1;

use App\Traits\ApiHandleRequest;
use App\Http\Controllers\Controller;

class SpellController extends Controller
{
    use ApiHandleRequest;

    public function __construct()
    {
        $this->apiHandleRequestTraitNameSpaceSetter('spell');
    }

    public function index()
    {
        return $this->showApiDataCollection();
    }

    public function show($spell)
    {
        return $this->showApiData($spell);
    }
}

<?php

namespace App\Http\Controllers\Api\v1;

use App\Traits\ApiHandleRequest;
use App\Http\Controllers\Controller;

class PotionController extends Controller
{
    use ApiHandleRequest;

    public function __construct()
    {
        $this->apiHandleRequestTraitNameSpaceSetter('potion');
    }

    public function index()
    {
        return $this->showApiDataCollectionWithPagination();
    }

    public function show($potion)
    {
        return $this->showApiData($potion);
    }
}

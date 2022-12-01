<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
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
        return $this->showApiDataCollection();
    }

    public function show($potion)
    {
        return $this->showApiData($potion);
    }
}

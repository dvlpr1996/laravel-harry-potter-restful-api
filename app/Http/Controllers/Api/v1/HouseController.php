<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\House;
use App\Traits\ApiHandleRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\v1\Features\FeatureCollection;

class HouseController extends Controller
{
    use ApiHandleRequest;

    public function __construct()
    {
        $this->apiHandleRequestTraitNameSpaceSetter('house');
    }

    public function index()
    {
        return $this->showApiDataCollectionWithPagination(true);
    }

    public function show($house)
    {
        return $this->showApiData($house);
    }

    public function showFeatures(House $house)
    {
        return new FeatureCollection(House::findOrFail($house->id)->features);
    }
}

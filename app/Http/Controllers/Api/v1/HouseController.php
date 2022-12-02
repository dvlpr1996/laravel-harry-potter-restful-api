<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\House;
use App\Models\Feature;
use Illuminate\Support\Arr;
use App\Traits\ApiHandleRequest;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use App\Http\Resources\FeatureResource;
use App\Http\Resources\FeatureCollection;

class HouseController extends Controller
{
    use ApiHandleRequest;

    public function __construct()
    {
        $this->apiHandleRequestTraitNameSpaceSetter('house');
    }

    public function index()
    {
        return $this->showApiDataCollection(true);
    }

    public function show($house)
    {
        return $this->showApiData($house);
    }

    public function showFeatures(House $house)
    {
        $houseFeature = House::find($house->id)->features;
        return new FeatureCollection($houseFeature);
    }
}

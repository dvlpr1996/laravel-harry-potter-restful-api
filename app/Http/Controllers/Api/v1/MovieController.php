<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Traits\ApiHandleRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\MovieCollection;

class MovieController extends Controller
{
    use ApiHandleRequest;

    public function __construct()
    {
        $this->apiHandleRequestTraitNameSpaceSetter('movie');
    }

    public function index()
    {
        return $this->showApiDataCollection();
    }

    public function show($movie)
    {
        return $this->showApiData($movie);
    }

    public function showStars(Movie $movie)
    {
        $houseFeature = Movie::find($movie->id)->stars;
        return new MovieCollection($houseFeature);
    }
}

<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Movie;
use App\Traits\ApiHandleRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\v1\Stars\StarCollection;
use App\Http\Resources\v1\Producers\ProducerCollection;

class MovieController extends Controller
{
    use ApiHandleRequest;

    public function __construct()
    {
        $this->apiHandleRequestTraitNameSpaceSetter('movie');
    }

    public function index()
    {
        return $this->showApiDataCollectionWithPagination();
    }

    public function show($movie)
    {
        return $this->showApiData($movie);
    }

    public function showStars(Movie $movie)
    {
        return new StarCollection(Movie::findOrFail($movie->id)->stars);
    }

    public function showProducers(Movie $movie)
    {
        return new ProducerCollection(Movie::findOrFail($movie->id)->producers);
    }
}

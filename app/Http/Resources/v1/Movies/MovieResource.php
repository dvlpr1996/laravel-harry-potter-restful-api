<?php

namespace App\Http\Resources\v1\Movies;

use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'movie_title' => $this->title,
            'movie_slug' => $this->slug,
            'movie_director' => $this->director,
            'movie_box_office' => $this->box_office,
            'movie_usRating' => $this->us_rating,
            'movie_ukRating' => $this->uk_rating,
            'movie_novel_writer' => $this->novel_writer,
            'movie_screenplay_writer' => $this->screenplay_writer,
            'movie_release_date' => $this->release_date,
            'movie_running_time' => $this->running_time,
            'movie_budget' => $this->budget,
            'movie_stars' => collect($this->stars)->pluck('name'),
            'movie_producer' => collect($this->producers)->pluck('name'),
            'movie_poster' => $this->poster,
        ];
    }
}

<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Traits\SeederHandler;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    use SeederHandler;

    public function run()
    {

        $data = $this->getJsonData('movies');

        foreach ($data as $key => $value) {
            Movie::create([
                'title' => $this->prepareData($value->title),
                'slug' => $this->prepareSlugData($value->title),
                'director' => $this->prepareData($value->directors),
                'box_office' => $this->prepareData($value->box_office),
                'us_rating' => $this->prepareData($value->rating[0]->us),
                'uk_rating' => $this->prepareData($value->rating[1]->uk),
                'novel_writer' => $this->prepareData($value->writers[0]->novel),
                'screenplay_writer' => $this->prepareData($value->writers[1]->screenplay),
                'release_date' => $this->prepareData($value->release_date),
                'running_time' => $this->prepareData($value->running_time),
                'budget' => $this->prepareData($value->budget),
                'poster' => $this->prepareUrlData($value->poster),
            ]);
        }
    }
}

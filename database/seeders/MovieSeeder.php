<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class MovieSeeder extends Seeder
{
    public function run()
    {
        $dataPath = __DIR__ . '/../../database/data/Movies.json';

        if (is_file($dataPath) && file_exists($dataPath)) {

            $data = json_decode(File::get($dataPath));

            foreach ($data as $key => $value) {
                Movie::create([
                    'title' => trim($value->title),
                    'slug' => Str::slug(trim($value->title)),
                    'director' => trim($value->directors),
                    'box_office' => trim($value->box_office),
                    'us_rating' => trim($value->rating[0]->us),
                    'uk_rating' => trim($value->rating[1]->uk),
                    'novel_writer' => trim($value->writers[0]->novel),
                    'screenplay_writer' => trim($value->writers[1]->screenplay),
                    'release_date' => trim($value->release_date),
                    'running_time' => trim($value->running_time),
                    'budget' => trim($value->budget),
                    'poster' => trim($value->poster),
                ]);
            }
        }
    }
}

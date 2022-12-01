<?php

namespace Database\Seeders;

use App\Models\House;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HouseSeeder extends Seeder
{
    public function run()
    {
        $dataPath = __DIR__ . '/../../Database/data/houses.json';

        if (is_file($dataPath) && file_exists($dataPath)) {

            $data = json_decode(File::get($dataPath));

            foreach ($data as $key => $value) {
                House::create([
                    'name' => trim($value->name),
                    'slug' => Str::slug(trim($value->name)),
                    'color' => trim($value->color),
                    'ghost_name' => trim($value->ghost),
                    'common_room_location' => trim($value->common_room[0]->location),
                    'common_room_entrance' => trim($value->common_room[1]->entrance),
                    'founder' => trim($value->founder),
                    'animal' => trim($value->animal),
                    'element' => trim($value->element),
                    'slogan' => trim($value->slogan),
                    'banner_path' => trim($value->banner),
                ]);
            }
        }
    }
}

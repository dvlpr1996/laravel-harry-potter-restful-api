<?php

namespace Database\Seeders;

use App\Models\Potion;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PotionSeeder extends Seeder
{
    public function run()
    {
        $dataPath = __DIR__ . '/../../Database/data/potions.json';

        if (is_file($dataPath) && file_exists($dataPath)) {

            $data = json_decode(File::get($dataPath));

            foreach ($data as $key => $value) {
                Potion::create([
                    'name' => trim($value->name),
                    'slug' => Str::slug($value->name),
                    'effect' => trim($value->effect),
                    'difficulty' => trim($value->difficulty),
                    'ingredients' => trim($value->ingredients),
                    'color' => trim($value->color),
                ]);
            }
        }
    }
}

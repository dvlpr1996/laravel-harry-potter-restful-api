<?php

namespace Database\Seeders;

use App\Models\Spell;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class SpellSeeder extends Seeder
{
    public function run()
    {
        $dataPath = __DIR__ . '/../../Database/data/spells.json';

        if (is_file($dataPath) && file_exists($dataPath)) {

            $data = json_decode(File::get($dataPath));

            foreach ($data as $key => $value) {
                Spell::create([
                    'name' => trim(e($value->name)),
                    'slug' => Str::slug(trim(e($value->name))),
                    'pronunciation' => trim(e($value->pronunciation)),
                    'description' => trim(e($value->description)),
                ]);
            }
        }
    }
}

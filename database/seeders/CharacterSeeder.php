<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CharacterSeeder extends Seeder
{
    public function run()
    {
        $dataPath = __DIR__ . '/../../Database/data/characters.json';

        if (is_file($dataPath) && file_exists($dataPath)) {

            $data = json_decode(File::get($dataPath));

            foreach ($data as $key => $value) {
                Character::create([
                    'name' => trim($value->name),
                    'slug' => Str::slug(trim($value->name)),
                    'type' => trim($this->setTypeCharacters($value->type)),
                    'house' => trim($value->house),
                    'gender' => trim($value->gender),
                    'species' => trim($value->species),
                    'patronus' => trim($value->patronus),
                    'is_alive' => $value->alive,
                    'ancestry' => trim($value->ancestry),
                    'wand_core' => trim($value->wand_core),
                    'is_wizard' => $value->wizard,
                    'date_of_birth' => trim($value->dateofbirth),
                ]);
            }
        }
    }

    private function setTypeCharacters(string $string): string
    {
        if ($string === 'student')
            return "0";
        if ($string === 'staff')
            return "1";
        if ($string === 'others')
            return "2";
    }
}

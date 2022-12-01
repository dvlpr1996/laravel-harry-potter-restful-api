<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Traits\SeederHandler;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CharacterSeeder extends Seeder
{
    use SeederHandler;

    public function run()
    {
        $data = $this->getJsonData('characters');

        foreach ($data as $key => $value) {
            Character::create([
                'name' => $this->prepareData($value->name),
                'slug' => $this->prepareSlugData($value->name),
                'type' => $this->prepareData($this->setTypeCharacters($value->type)),
                'house' => $this->prepareData($value->house),
                'gender' => $this->prepareData($value->gender),
                'species' => $this->prepareData($value->species),
                'patronus' => $this->prepareData($value->patronus),
                'is_alive' => $value->alive,
                'ancestry' => $this->prepareData($value->ancestry),
                'wand_core' => $this->prepareData($value->wand_core),
                'is_wizard' => $value->wizard,
                'date_of_birth' => $this->prepareData($value->dateofbirth),
            ]);
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

<?php

namespace Database\Seeders;

use App\Models\Spell;
use App\Traits\SeederHandler;
use Illuminate\Database\Seeder;

class SpellSeeder extends Seeder
{
    use SeederHandler;

    public function run()
    {
        $data = $this->getJsonData('spells');

        foreach ($data as $key => $value) {
            Spell::create([
                'name' => $this->prepareData($value->name),
                'slug' => $this->prepareSlugData($value->name),
                'pronunciation' => $this->prepareData($value->pronunciation),
                'description' => $this->prepareData($value->description),
            ]);
        }
    }
}

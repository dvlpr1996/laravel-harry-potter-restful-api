<?php

namespace Database\Seeders;

use App\Models\Potion;
use App\Traits\SeederHandler;
use Illuminate\Database\Seeder;

class PotionSeeder extends Seeder
{
    use SeederHandler;

    public function run()
    {
        $data = $this->getJsonData('potions');

        foreach ($data as $key => $value) {
            Potion::create([
                'name' => $this->prepareData($value->name),
                'slug' => $this->prepareSlugData($value->name),
                'effect' => $this->prepareData($value->effect),
                'difficulty' => $this->prepareData($value->difficulty),
                'ingredients' => $this->prepareData($value->ingredients),
                'color' => $this->prepareData($value->color),
            ]);
        }
    }
}

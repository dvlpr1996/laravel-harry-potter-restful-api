<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\BookSeeder;
use Database\Seeders\StarSeeder;
use Database\Seeders\HouseSeeder;
use Database\Seeders\MovieSeeder;
use Database\Seeders\SpellSeeder;
use Database\Seeders\PotionSeeder;
use Database\Seeders\FeatureSeeder;
use Database\Seeders\ProducerSeeder;
use Database\Seeders\CharacterSeeder;
use Database\Seeders\MovieStarSeeder;
use Database\Seeders\MovieProducerSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            BookSeeder::class,
            SpellSeeder::class,
            PotionSeeder::class,
            HouseSeeder::class,
            FeatureSeeder::class,
            CharacterSeeder::class,
            MovieSeeder::class,
            StarSeeder::class,
            ProducerSeeder::class,
            MovieStarSeeder::class,
            MovieProducerSeeder::class,
        ]);
    }
}

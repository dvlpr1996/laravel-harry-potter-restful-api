<?php

namespace Database\Seeders;

use App\Models\MovieProducer;
use App\Traits\SeederHandler;
use Illuminate\Database\Seeder;

class MovieProducerSeeder extends Seeder
{
    use SeederHandler;

    public function run()
    {
        $data = [
            '1' => ["1"],
            '2' => ["1"],
            '3' => ["2", "1", "3"],
            '4' => ["1"],
            '5' => ["1", "4"],
            '6' => ["1", "4"],
            '7' => ["1", "4", "5"],
            '8' => ["1", "4", "5"]
        ];

        $result = [];
        foreach ($data as $key => $values) {
            foreach ($values as $value) {
                $result[] = [
                    'movie_id' => $key,
                    'producer_id' => $value,
                ];
            }
        }

        foreach ($result as $key => $value) {
            MovieProducer::create([
                'movie_id' => $this->prepareData($value['movie_id']),
                'producer_id' => $this->prepareData($value['producer_id'])
            ]);
        }
    }
}

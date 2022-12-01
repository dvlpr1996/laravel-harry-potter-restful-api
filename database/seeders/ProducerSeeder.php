<?php

namespace Database\Seeders;

use App\Models\Producer;
use App\Traits\SeederHandler;
use Illuminate\Database\Seeder;

class ProducerSeeder extends Seeder
{
    use SeederHandler;

    public function run()
    {
        $data = [
            'david heyman',
            'chris columbus',
            'mark radcliffe',
            'david barron',
            'j. k. rowling'
        ];

        foreach ($data as $value) {
            Producer::create([
                'name' => $this->prepareData(ucfirst($value))
            ]);
        }
    }
}

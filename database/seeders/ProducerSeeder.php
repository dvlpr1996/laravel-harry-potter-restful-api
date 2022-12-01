<?php

namespace Database\Seeders;

use App\Models\Producer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProducerSeeder extends Seeder
{
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
                'name' => ucfirst(trim($value))
            ]);
        }
    }
}

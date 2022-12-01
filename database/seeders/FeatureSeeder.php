<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FeatureSeeder extends Seeder
{
    public function run()
    {
        $data = [
            '1' => [
                'courage',
                'bravery',
                'determination',
                'daring',
                'nerve',
                'chivalry'
            ],
            '2' => [
                'hard-working',
                'patience',
                'fairness',
                'just',
                'loyalty',
                'modesty'
            ],
            '3' => [
                'pride',
                'cunning',
                'ambition',
                'determination',
                'resourcefulness',
                'self-preservation'
            ],
            '4' => [
                'wit',
                'wisdom',
                'learning',
                'creativity',
                'acceptance',
                'intelligence'
            ]
        ];

        $result = [];
        foreach ($data as $key => $values) {
            foreach ($values as $value) {
                $result[] = [
                    'house_id' => $key,
                    'feature' => $value,
                ];
            }
        }

        foreach ($result as $key => $value) {
            Feature::create([
                'house_id' => $value['house_id'],
                'feature' => $value['feature']
            ]);
        }
    }
}

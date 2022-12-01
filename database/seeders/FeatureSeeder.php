<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Traits\SeederHandler;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    use SeederHandler;

    public function run()
    {
        $data = [
            '1' => [
                'nerve',
                'daring',
                'courage',
                'bravery',
                'chivalry',
                'determination'
            ],
            '2' => [
                'just',
                'modesty',
                'loyalty',
                'fairness',
                'patience',
                'hard-working'
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
                'house_id' => $this->prepareData($value['house_id']),
                'feature' => $this->prepareData($value['feature'])
            ]);
        }
    }
}

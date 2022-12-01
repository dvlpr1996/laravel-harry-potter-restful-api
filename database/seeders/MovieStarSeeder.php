<?php

namespace Database\Seeders;

use App\Models\MovieStar;
use App\Traits\SeederHandler;
use Illuminate\Database\Seeder;

class MovieStarSeeder extends Seeder
{
    use SeederHandler;

    public function run()
    {
        $data = [
            '1' => [
                "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18"
            ],
            '2' => [
                "1", "2", "3", "4", "5", "6", "7", "10", "11", "12", "13", "14", "15", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26"
            ],
            '3' => [
                "1", "2", "3", "5", "6", "10", "11", "12", "15", "17", "18", "22", "26", "27", "28", "29", "30", "31", "32", "33", "34"
            ],
            '4' => [
                "1", "2", "3", "5", "10", "12", "14", "17", "18", "20", "22", "23", "26", "28", "29", "30", "35", "36", "37", "38", "39", "40", "41", "42", "43", "44"
            ],
            '5' => [
                "1", "2", "3", "5", "45", "35", "28", "36", "6", "20", "29", "10", "11", "12", "46", "31", "32", "17", "14", "18", "22", "47", "48", "15", "26"
            ],
            '6' => [
                "1", "2", "3", "45", "5", "28", "10", "12", "49", "30", "31", "15", "21", "17", "14", "18", "24", "50", "48", "26"
            ],
            '7' => [
                "1", "2", "3", "45", "5", "35", "28", "36", "6", "9", "51", "20", "52", "10", "11", "30", "46", "31", "14", "18", "53", "54", "55", "50", "56", "57", "58", "42", "48", "15", "26", "21"
            ],
            '8' => [
                "1", "2", "3", "45", "5", "49", "35", "28", "9", "20", "59", "29", "10", "12", "31", "17", "14", "18", "60", "61", "24", "54", "62", "25", "50", "56", "63", "64", "42", "48", "32", "15", "26", "21"
            ]
        ];

        $result = [];
        foreach ($data as $key => $values) {
            foreach ($values as $value) {
                $result[] = [
                    'movie_id' => $key,
                    'star_id' => $value,
                ];
            }
        }

        foreach ($result as $key => $value) {
            MovieStar::create([
                'movie_id' => $this->prepareData($value['movie_id']),
                'star_id' => $this->prepareData($value['star_id'])
            ]);
        }
    }
}

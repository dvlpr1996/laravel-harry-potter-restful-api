<?php

namespace Database\Seeders;

use App\Models\House;
use App\Traits\SeederHandler;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    use SeederHandler;

    public function run()
    {
        $data = $this->getJsonData('houses');

        foreach ($data as $key => $value) {
            House::create([
                'name' => $this->prepareData($value->name),
                'slug' => $this->prepareSlugData($value->name),
                'founder' => $this->prepareData($value->founder),
                'slogan' => $this->prepareData($value->slogan),
                'ghost_name' => $this->prepareData($value->ghost),
                'color' => $this->prepareData($value->color),
                'animal' => $this->prepareData($value->animal),
                'element' => $this->prepareData($value->element),
                'banner_path' => $this->prepareUrlData($value->banner),
                'common_room_entrance' => $this->prepareData($value->common_room[1]->entrance),
                'common_room_location' => $this->prepareData($value->common_room[0]->location),
            ]);
        }
    }
}

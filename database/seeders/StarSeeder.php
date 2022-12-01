<?php

namespace Database\Seeders;

use App\Models\Star;
use App\Traits\SeederHandler;
use Illuminate\Database\Seeder;

class StarSeeder extends Seeder
{
    use SeederHandler;

    public function run()
    {
        $data = [
            'daniel radcliffe',
            'rupert grint',
            'emma watson',
            'john cleese',
            'robbie coltrane',
            'richard griffiths',
            'richard harris',
            'ian hart',
            'john hurt',
            'alan rickman',
            'fiona shaw',
            'maggie smith',
            'sean biggerstaff',
            'warwick davis',
            'julie walters',
            'zoë wanamaker',
            'david bradley',
            'tom felton',
            'kenneth branagh',
            'jason isaacs',
            'bonnie wright',
            'robert hardy',
            'shirley henderson',
            'gemma jones',
            'miriam margolyes',
            'mark williams',
            'julie christie',
            'michael gambon',
            'gary oldman',
            'timothy spall',
            'david thewlis',
            'emma thompson',
            'pam ferris',
            'dawn french',
            'ralph fiennes',
            'brendan gleeson',
            'miranda richardson',
            'frances de la tour',
            'predrag bjelac',
            'roger lloyd-pack',
            'stanislav ianevski',
            'clémence poésy',
            'robert pattinson',
            'david tennant',
            'helena bonham carter',
            'imelda staunton',
            'george harris',
            'natalia tena',
            'jim broadbent',
            'helen mccrory',
            'rhys ifans',
            'bill nighy',
            'toby jones',
            'dave legeno',
            'simon mcburney',
            'nick moran',
            'peter mullan',
            'david o hara',
            'kelly macdonald',
            'matthew lewis',
            'ciarán hinds',
            'evanna lynch',
            'james phelps',
            'oliver phelps'
        ];

        foreach ($data as $key => $value) {
            Star::create([
                'name' => $this->prepareData(ucwords($value))
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;


class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $travels = [
                [
                    'name' => 'Londra',
                    'destinazione' => 'Londra',
                    'prezzo' => '100'
                ],
                [
                    'name' => 'Roma',
                    'destinazione' => 'Roma',
                    'prezzo' => '100'
                ]
            ];
        foreach ($travels as $travel){
            $newTravel = new Travel();
            $newTravel->name = $faker->word();
            $newTravel->destinazione = $faker->city();
            $newTravel->prezzo = $faker->numerify();
            $newTravel->save();
        }
    }
}

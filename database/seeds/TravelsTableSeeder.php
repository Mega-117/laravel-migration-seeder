<?php

use Illuminate\Database\Seeder;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travels = [
                [
                    'name' => 'Londra'
                ],
                [
                    'name' => 'Roma'
                ]
            ];
        foreach ($travels as $travel){
            $newTravel = new Travel();
            $newTravel->name = $travel['name'];
            $newTravel->save();
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $trains = [
            [
                "company" => "Trenitalia",
                "start" => "Milano",
                "end" => "Roma",
                "departure" => "05:10:00",
                "arrival" => "09:04:00",
                "train_code" => "TR3332GL45",
                "is_on_time" => true,
                "is_late" => false
            ],
            [
                "company" => "Trenitalia",
                "start" => "Roma",
                "end" => "Milano",
                "departure" => "11:15:00",
                "arrival" => "14:25:00",
                "train_code" => "TR0002GL45",
                "is_on_time" => true,
                "is_late" => false
            ]
        ];


        foreach ($trains as $train) {
            $nuovoTreno = new Train();
            $nuovoTreno->company = $train["company"];
            $nuovoTreno->start = $train["start"];
            $nuovoTreno->end = $train["end"];
            $nuovoTreno->departure = $train["departure"];
            $nuovoTreno->arrival = $train["arrival"];
            $nuovoTreno->train_code = $train["train_code"];
            $nuovoTreno->is_on_time = $train["is_on_time"];
            $nuovoTreno->is_late = $train["is_late"];
            $nuovoTreno->save();
        }

        for ($i = 0; $i < 4; $i++) {
            $nuovoTreno = new Train();
            $nuovoTreno->company = $faker->words(2, true);
            $nuovoTreno->start = $faker->city();
            $nuovoTreno->end = $faker->city();
            $nuovoTreno->departure = $faker->time();
            $nuovoTreno->arrival = $faker->time();
            $nuovoTreno->train_code = $faker->isbn10();
            $nuovoTreno->is_on_time = $faker->boolean();
            $nuovoTreno->is_late = $faker->boolean();
            $nuovoTreno->save();
        }
    }
}

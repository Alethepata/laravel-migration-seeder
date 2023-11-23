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
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){

            $train = new Train();
            $train->agency = $faker->words(2,true);
            $train->departure_station = $faker->word();
            $train->arrival_station = $faker->word();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->regexify('[A-Z]{6}');
            $train->number_of_carriages = $faker->numberBetween(1,20);
            $train->isin_time = $faker->numberBetween(0,1);
            $train->isdeleted = $faker->numberBetween(0,1);
            $train->save();
        }
    }
}

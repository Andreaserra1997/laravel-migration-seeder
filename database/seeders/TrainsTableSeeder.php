<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            Train::create([
                    'company' => $faker->word(),
                    'starting_station' => $faker->city(),
                    'end_station' => $faker->city(),
                    'departure_time' => $faker->time(),
                    'arrival_time' => $faker->time(),
                    'train_code' => $faker->ean8(),
                    'number_coaches' => $faker->randomDigit(),
                    'on_time' => $faker->boolean(),
                    'deleted' => $faker->boolean(),
                ]);
        }
    }
}
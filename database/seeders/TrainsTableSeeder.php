<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        for ($i = 0; $i <= 100; $i++) {
            Train::create([
                'company' => $faker->company(),
                'departure_station' => $faker->city(),
                'arrival_station' =>  $faker->city(),
                'departure_time' => $faker->dateTime(),
                'arrival_time' => $faker->dateTime(),
                'train_code' => $faker->bothify('??####??'),
                'number_of_carriages' => rand(1, 20),
                'in_time' => $faker->boolean(),
                'delete' => $faker->boolean(),
            ]);
        }
    }
}

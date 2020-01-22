<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'brand'=> $faker->word,
        'price'=> $faker->numberBetween($min =  50 , $max = 200 ),
        'year'=> $faker->numberBetween($min =  2015 , $max = 2020 ),
        'mileage'=> $faker->numberBetween($min =  10000 , $max = 50000 ),
        'seats' => 4,
        'luggage'=> 5,
        'description'=> $faker->paragraph,
    ];
});

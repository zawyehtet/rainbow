<?php
use App\Movie;

use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        // 'image' => $faker->image('app/public/upload',640,480, null, false),
        // // 'image' => $faker->imageUrl($width = 640, $height = 480),
        // 'status' =>$faker->boolean,
        // 'title' =>$faker->title,
        // 'duration' => $faker->unique(true)->numberBetween($min = 100, $max = 200),

    ];
});

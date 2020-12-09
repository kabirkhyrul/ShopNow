<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Support\Str;
use Faker\Generator as Faker;

use App\Models\Banner;

$factory->define(Banner::class, function (Faker $faker) {
    return [
        'top_string' => $faker->text(255),
        'middle_string' => $faker->text(255),
        'bottom_string' => $faker->text(255),
        'url' => $faker->url,
        'top_position' => $faker->boolean,
    ];
});

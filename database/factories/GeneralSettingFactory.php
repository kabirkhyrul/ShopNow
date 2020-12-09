<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Support\Str;
use Faker\Generator as Faker;

use App\Models\GeneralSetting;

$factory->define(GeneralSetting::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'logo' => $faker->text(255),
        'address' => $faker->text(255),
        'phone' => $faker->phoneNumber,
        'email' => $faker->email,
        'facebook' => $faker->text(255),
        'twitter' => $faker->text(255),
        'instagram' => $faker->text(255),
        'pinterest' => $faker->text(255),
        'top_bar_offer' => $faker->text(255),
        'currency' => $faker->currencyCode,
        'shipping_cost' => $faker->randomNumber(2),
    ];
});

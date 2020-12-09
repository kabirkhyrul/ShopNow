<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Support\Str;
use Faker\Generator as Faker;

use App\Models\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->randomFloat(2, 0, 9999),
        'cost_price' => $faker->randomNumber(2),
        'quantity' => $faker->randomNumber,
        'shipping' => $faker->randomNumber(0),
        'weight' => $faker->text(255),
        'special_price' => $faker->randomNumber(2),
        'short_description' => $faker->text,
        'description' => $faker->sentence(15),
        'information' => $faker->text,
        'total_sale' => $faker->randomNumber(0),
        'rating' => $faker->randomNumber(2),
        'slug' => $faker->slug,
        'is_featured' => $faker->boolean,
        'free_shipping' => $faker->boolean,
        'status' => $faker->boolean,
        'category_id' => factory(App\Models\Category::class),
    ];
});

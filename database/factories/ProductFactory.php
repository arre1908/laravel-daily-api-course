<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id' => Category::inRandomOrder()->first()->id,
        'name' => $faker->word(),
        'description' => $faker->paragraph(),
        'price' => rand(1000, 99999)
    ];
});

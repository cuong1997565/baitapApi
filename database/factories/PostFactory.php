<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->semtence(),
        'body' => $faker->text(),
        'user_id' => 1
    ];
});

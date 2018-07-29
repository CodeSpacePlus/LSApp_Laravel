<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'title' => $faker->text(50),
        'body' => $faker->text(300),
        'cover_image' => 'noimage.jpg',
    ];
});

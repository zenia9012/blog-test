<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->randomElement([
            'Cats and dogs',
            'Winter',
            'Nature',
            'Ukrainian nature',
            'Black Sea',
            'Mountain',
            'Summer beach',
            'Electric cars'
        ]),
        'body' => $faker->text(),
    ];
});

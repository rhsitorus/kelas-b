<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'username' => $faker->unique()->name,
        'password' => substr($faker->name, 0, 10),
        'active' => true,
        'foto' => 'default.png',
        'level' => 'admin'
    ];
});

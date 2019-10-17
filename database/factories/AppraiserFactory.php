<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Appraiser;
use Faker\Generator as Faker;

$factory->define(Appraiser::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Assessment_Staff;
use Faker\Generator as Faker;

$factory->define(Assessment_Staff::class, function (Faker $faker) {
    return [
        //
        'staff_id'=>App\User::all()->random()->id,
        'category_id'=>App\Model\Category::all()->random()->id,
        'rating_id'=>App\Model\Rating::all()->random()->id,
        'skill_id'=>App\Model\Skill::all()->random()->id,
    ];
});

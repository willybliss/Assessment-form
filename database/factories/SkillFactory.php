<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Skill;
use Faker\Generator as Faker;

$factory->define(Skill::class, function (Faker $faker) {
    return [
        //
        'skill_name'=>$faker->name,
        'skill_description'=>$faker->word

    ];
});

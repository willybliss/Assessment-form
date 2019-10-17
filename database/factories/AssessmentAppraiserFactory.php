<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Assessment_Appraiser;
use Faker\Generator as Faker;

$factory->define(Assessment_Appraiser::class, function (Faker $faker) {
    return [
        //
        'appraiser_id'=>App\Model\Appraiser::all()->random()->id,
        
        'category_id'=>App\Model\Category::all()->random()->id,
        
        'rating_id'=>App\Model\Rating::all()->random()->id,
        
        'skill_id'=>App\Model\Skill::all()->random()->id,
        
        'staff_id'=>App\User::all()->random()->id,
    ];
});

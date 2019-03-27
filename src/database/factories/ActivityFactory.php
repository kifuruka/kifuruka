<?php

use Faker\Generator as Faker;
use App\Models\School as School;

$factory->define(App\Models\Activity::class, function (Faker $faker) {
    return [
        'school_id'=>School::all()->random()->id,
        'activitie_name'=>$faker ->lastKanaName,
        'title'=>$faker-> realText(20),
        'top_contents'=>$faker-> realText,
        'total_donation'=> $faker-> numberBetween(5000,2500000),
        'fans'=> $faker-> numberBetween(0,1000),
        'activitie_img' => $faker-> imageUrl,
        'url' => $faker-> url,
    ];
});

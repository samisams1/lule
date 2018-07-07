<?php

use Faker\Generator as Faker;
use App\Model\Quarter;
$factory->define(App\Model\Month::class, function (Faker $faker) {
    return [
         'quarter_id'=>function(){
         	return Quarter::all()->random();
         },
        'name' =>$faker->word,
        'description' =>$faker->word,
        'created_by'=>"samisams",
          'updated_by' =>"samisams"
    ];
});

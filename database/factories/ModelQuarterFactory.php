<?php

use Faker\Generator as Faker;
use App\Model\Year;
$factory->define(App\Model\Quarter::class, function (Faker $faker) {
     return [
         'year_id'=>function(){
         	return Year::all()->random();
         },
        'name' =>$faker->word,
        'description' =>$faker->word,
        'created_by'=>"samisams",
          'updated_by' =>"samisams"
    ];
});

<?php

use Faker\Generator as Faker;
use App\Model\Region;
$factory->define(App\Model\Zone::class, function (Faker $faker) {
     return [
         'region_id'=>function(){
         	return Region::all()->random();
         },
        'name' =>$faker->word,
        'description' =>$faker->word,
        'created_by'=>"samisams",
          'updated_by' =>"samisams"
    ];
});

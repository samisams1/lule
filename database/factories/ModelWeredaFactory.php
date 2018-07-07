<?php

use Faker\Generator as Faker;
use App\Model\Zone;
$factory->define(App\Model\Wereda::class, function (Faker $faker) {
       return [
         'zone_id'=>function(){
         	return Zone::all()->random();
         },
        'name' =>$faker->word,
        'description' =>$faker->word,
        'created_by'=>"samisams",
          'updated_by' =>"samisams"
    ];
});

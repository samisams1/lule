<?php

use Faker\Generator as Faker;
use App\Model\Wereda;
$factory->define(App\Model\Kebele::class, function (Faker $faker) {
        return [
         'wereda_id'=>function(){
         	return Wereda::all()->random();
         },
        'name' =>$faker->word,
        'description' =>$faker->word,
        'created_by'=>"samisams",
          'updated_by' =>"samisams"
    ];
});

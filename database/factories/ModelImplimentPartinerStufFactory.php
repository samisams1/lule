<?php

use Faker\Generator as Faker;
use App\Model\ImplimentPartiners;
$factory->define(App\Model\ImplimentPartinerStuf::class, function (Faker $faker) {
     return [
           'impliment_partiner_id'=>function(){
         	return ImplimentPartiners::all()->random();
         },
        'name' =>$faker->word,
        'description' =>$faker->word,
        'created_by'=>"samisams",
          'updated_by' =>"samisams"
    ];
});



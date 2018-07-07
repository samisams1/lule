<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Donore::class, function (Faker $faker) {
    return [
        'name' =>$faker->word,
        'created_by'=>"samisams",
          'updated_by' =>"samisams",
       
   
    ];
});

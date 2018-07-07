<?php

use Faker\Generator as Faker;
use App\Model\Month;
$factory->define(App\Model\Weak::class, function (Faker $faker) {
      return [
         'month_id'=>function(){
         	return Zone::all()->random();
         },
        'name' =>$faker->word,
        'description' =>$faker->word,
        'created_by'=>"samisams",
          'updated_by' =>"samisams"
    ];
});

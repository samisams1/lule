<?php

use Faker\Generator as Faker;
use App\Model\Programmes;
$factory->define(App\Model\ProjectCategory::class, function (Faker $faker) {
     return [
         'programmes_id'=>function(){
         	return Programmes::all()->random();
         },
        'name' =>$faker->word,
        'description' =>$faker->word,
        'created_by'=>"samisams",
          'updated_by' =>"samisams"
    ];
});

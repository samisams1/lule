<?php

use Faker\Generator as Faker;
use App\Model\Programmes;
use App\Model\Region;
$factory->define(App\Model\ProgrammDetail::class, function (Faker $faker) {
       return [
         'programm_id'=>function(){
         	return Programmes::all()->random();
         },
           'region_id'=>function(){
         	return Region::all()->random();
         },
        'budget' =>$faker->word,
        'starting_year' =>$faker->word,
        'ending_year' =>$faker->word,
        'status' =>$faker->word,
        'created_by'=>"samisams",
          'updated_by' =>"samisams"

    ];
});

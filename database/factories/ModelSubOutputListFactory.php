<?php

use Faker\Generator as Faker;
use App\Model\SuboutComeList;
use App\Model\OutputList;
$factory->define(App\Model\SubOutputList::class, function (Faker $faker) {
      return [
         'output_list_id'=>function(){
         	return OutputList::all()->random();
         },
          'subout_come_list_id'=>function(){
         	return SuboutComeList::all()->random();
         },
        'name' =>$faker->word,
        'description' =>$faker->word,
         'year' =>$faker->year,
        'created_by'=>"samisams",
          'updated_by' =>"samisams"
    ];
});

<?php

use Faker\Generator as Faker;
use App\Model\OutputCategory;
use App\Model\OutcomeList;
use App\Model\ActivityList;
$factory->define(App\Model\OutputList::class, function (Faker $faker) {
     return [
         'output_category_id'=>function(){
         	return OutputCategory::all()->random();
         },
          'outcome_id'=>function(){
         	return OutcomeList::all()->random();
         },
        'name' =>$faker->word,
        'description' =>$faker->word,
        'created_by'=>"samisams",
          'updated_by' =>"samisams"
    ];
});

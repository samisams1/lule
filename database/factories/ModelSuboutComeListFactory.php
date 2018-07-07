<?php

use Faker\Generator as Faker;
use App\Model\OutComeList;
$factory->define(App\Model\SuboutComeList::class, function (Faker $faker) {
         return [
         'outcome_list_id'=>function(){
         	return OutcomeList::all()->random();
         },
        'name' =>$faker->word,
        'description' =>$faker->word,
        'created_by'=>"samisams",
          'updated_by' =>"samisams"
    ];
});

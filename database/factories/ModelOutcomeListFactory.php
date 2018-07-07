<?php

use Faker\Generator as Faker;
use App\Model\OutcomeCategory;
$factory->define(App\Model\OutcomeList::class, function (Faker $faker) {
    return [

          'outcome_category_id'=>function(){
         	return OutcomeCategory::all()->random();
         },
        'name' =>$faker->word,
        'description' =>$faker->word,
        'created_by'=>"samisams",
          'updated_by' =>"samisams"
    ];
});

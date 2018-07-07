<?php

use Faker\Generator as Faker;
use App\Model\InputType;
$factory->define(App\Model\InputList::class, function (Faker $faker) {
    return [
         'input_type_id'=>function(){
         	return InputType::all()->random();
         },
        'name' =>$faker->word,
        'description' =>$faker->word,
        'created_by'=>"samisams",
          'updated_by' =>"samisams"
    ];
});

<?php

use Faker\Generator as Faker;
use App\Model\InputSubList;
$factory->define(App\Model\Location::class, function (Faker $faker) {
         return [
         'sub_input_list_id'=>function(){
         	return InputSubList::all()->random();
         },
        'latitude' =>$faker->word,
        'longtuide' =>$faker->word,
        'created_by'=>"samisams",
          'updated_by' =>"samisams"
    ];
});

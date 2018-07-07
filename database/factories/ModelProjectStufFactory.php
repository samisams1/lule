<?php

use Faker\Generator as Faker;
use App\Model\ImplimentPartiners;
use App\Model\Kebele;
$factory->define(App\Model\ProjectStuf::class, function (Faker $faker) {
      return [
         'impliment_partiner_id'=>function(){
         	return ImplimentPartiners::all()->random();
         },
          'kebele_id'=>function(){
            return Kebele::all()->random();
         },
        'first_name' =>$faker->word,
       
        'midel_name' =>$faker->word,
        'last_name' =>$faker->word,
         'created_by'=>"samisams",
        'updated_by' =>"samisams",
        'status' =>"active"
        
    ];
});

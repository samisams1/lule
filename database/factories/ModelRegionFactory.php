<?php

use Faker\Generator as Faker;
use App\Model\Cluster;
$factory->define(App\Model\Region::class, function (Faker $faker) {
      return [
         'cluster_id'=>function(){
         	return Cluster::all()->random();
         },
        'name' =>$faker->word,
        'description' =>$faker->word,
        'created_by'=>"samisams",
          'updated_by' =>"samisams"
    ];
});

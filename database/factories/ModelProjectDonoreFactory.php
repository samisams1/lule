<?php

use Faker\Generator as Faker;
use App\Model\Project;
use App\Model\Donore;
$factory->define(App\Model\ProjectDonore::class, function (Faker $faker) {
    return [
         'project_id'=>function(){
         	return Project::all()->random();
         },
            'donore_id'=>function(){
         	return Donore::all()->random();
         }
       
    ];
});


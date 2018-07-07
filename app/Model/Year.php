<?php

namespace App\Model;
use App\Model\Quarter;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
         public function Quarter(){
    	return $this->hasMany(Quarter::class);   
}
}

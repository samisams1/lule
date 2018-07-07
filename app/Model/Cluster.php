<?php

namespace App\Model;
use App\Model\Region;
use App\Model\Country;
use Illuminate\Database\Eloquent\Model;

class Cluster extends Model
{
	public function Country(){
		return $this->belongsTo(Country::class);
	}
             public function Region(){
    	return $this->hasMany(Region::class);   
}
}

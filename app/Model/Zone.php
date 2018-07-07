<?php

namespace App\Model;
use App\Model\Region;
use App\Model\Wereda;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
   	public function Region(){
		return $this->belongsTo(Region::class);
	}
		public function Wereda(){
		return $this->hasMony(Wereda::class);
	}
}

<?php

namespace App\Model;
use App\Model\Zone;
use Illuminate\Database\Eloquent\Model;

class Wereda extends Model
{
    	public function Zone(){
		return $this->belongsTo(Zone::class);
	}
}

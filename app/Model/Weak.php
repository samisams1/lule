<?php

namespace App\Model;
use App\Model\Month;
use Illuminate\Database\Eloquent\Model;

class Weak extends Model
{
    	public function Month(){
		return $this->belongsTo(Month::class);
	}
}

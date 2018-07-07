<?php

namespace App\Model;
use App\Model\Year;
use App\Model\Month;
use Illuminate\Database\Eloquent\Model;

class Quarter extends Model
{
	    public function Year(){
    	return $this->belongsTo(Year::class);
}
        public function Month(){
    	return $this->hasMony(Month::class);
}
}

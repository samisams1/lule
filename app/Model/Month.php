<?php

namespace App\Model;
use App\Model\Quarter;
use App\Model\Weak;
use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
	         public function Quarter(){
    	return $this->belongsTo(Quarter::class);
}
          public function Weak(){
    	return $this->hasMony(Weak::class);
}
}

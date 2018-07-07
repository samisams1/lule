<?php

namespace App\Model;
use App\Model\ImplimentPartiners;
use App\Model\ProjectStuf;
use Illuminate\Database\Eloquent\Model;

class ImplimentPartinerStuf extends Model
{

  	public function ImplimentPartiners(){
		return $this->belongsTo(ImplimentPartiners::class);
	}
	      public function ProjectStuf(){
    	return $this->hasMany(ProjectStuf::class);
}
}

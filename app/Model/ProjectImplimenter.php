<?php

namespace App\Model;
use App\Model\Project;
use App\Model\ImplimentPartiners;
use Illuminate\Database\Eloquent\Model;

class ProjectImplimenter extends Model
{
      	public function Project(){
		return $this->belongsTo(Project::class);
	}
	  	public function ImplimentPartiners(){
		return $this->belongsTo(ImplimentPartiners::class);
	}
}

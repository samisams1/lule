<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Project;
use App\Model\Donore;
class ProjectDonore extends Model
{
    	public function Project(){
		return $this->belongsTo(Project::class);
	}
	 	public function Donore(){
		return $this->belongsTo(Donore::class);
	
}
}
<?php

namespace App\Model;
use App\Model\Projects;
use App\Model\Programmes;
use App\Model\Programmcategory;
use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
	    public function Programmes(){
    	return $this->belongsTo(Programmes::class);
}
 
         public function Projects(){
    	return $this->hasMany(Projects::class);   
}
         public function Programmcategory(){
    	return $this->belongsTo(Programmcategory::class);   
}
}

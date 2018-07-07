<?php

namespace App\Model;
use App\Model\ProgramCategory;
use App\Model\Projects;
use Illuminate\Database\Eloquent\Model;

class Programmes extends Model
{
    public function ProgramCategory(){
    	return $this->belongsTo(ProgramCategory::class);
}
  
}

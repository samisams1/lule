<?php

namespace App\Model;
use App\Model\Programmes;
use Illuminate\Database\Eloquent\Model;
class ProgramCategory extends Model
{
     public function Programmes(){
    	return $this->hasMany(Programmes::class);   
}
}

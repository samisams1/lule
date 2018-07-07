<?php

namespace App\Model;
use App\Model\ImplimentPartiners;
use Illuminate\Database\Eloquent\Model;

class ProjectStuf extends Model
{
      public function ImplimentPartiners(){
    	return $this->belongsTo(ImplimentPartiners::class);
}
}

<?php

namespace App\Model;
use App\Model\InputSubList;
use Illuminate\Database\Eloquent\Model;

class InputDetail extends Model
{
     	public function InputSubList(){
		return $this->belongsTo(InputSubList::class);
	}
}

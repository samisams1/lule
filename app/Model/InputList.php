<?php

namespace App\Model;
use App\Model\InputSubList;
use App\Model\InputType;
use Illuminate\Database\Eloquent\Model;

class InputList extends Model
{
	 	public function InputType(){
		return $this->belongsTo(InputType::class);
	}
     	public function InputSubList(){
		return $this->hasMany(InputSubList::class);
	}
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\InputSubList;
class Location extends Model
{
    	public function InputSubList(){
		return $this->belongsTo(InputSubList::class);
	}
}

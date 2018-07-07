<?php
namespace App\Model;
use App\Model\Wereda;
use App\Model\InputList;
use App\Model\InputDetail;
use Illuminate\Database\Eloquent\Model;

class InputSubList extends Model
{
     	public function InputList(){
		return $this->belongsTo(InputList::class);
	}
		public function InputDetail(){
		return $this->hasMany(InputDetail::class);
	}
}

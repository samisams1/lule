<?php

namespace App\Http\Resources\Outcome;

use Illuminate\Http\Resources\Json\Resource;

class OutcomeListCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         return [
          'Outcome List Name' =>$this->name,
          'Outcome List Description' =>$this->description,
          'Outcome Category' =>$this->OutcomeCategory->name

        ];
    }
}

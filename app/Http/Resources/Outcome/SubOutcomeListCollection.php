<?php

namespace App\Http\Resources\Outcome;

use Illuminate\Http\Resources\Json\Resource;

class SubOutcomeListCollection extends Resource
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
          'Sub Outcome Name' =>$this->name,
          'Outcome Name' =>$this->OutcomeList->name,
          'Sub OutCome Description' =>$this->description,
          'sub Projects' =>$this->OutcomeList

        ];
    }
}

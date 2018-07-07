<?php

namespace App\Http\Resources\Outcome;

use Illuminate\Http\Resources\Json\Resource;

class OutcomeCategoryCollection extends Resource
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
          'Outcome Name' =>$this->name,
          'OutCome Description' =>$this->description,
          'Project Name' =>$this->Project->name

        ];
    }
}

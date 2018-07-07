<?php

namespace App\Http\Resources\Output;

use Illuminate\Http\Resources\Json\Resource;

class OutputCategoryCollection extends Resource
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
          'OutPut Name' =>$this->name,
           'OutcomeList' =>$this->OutputList,
          'Output Description' =>$this->description

        ];
    }
}

<?php

namespace App\Http\Resources\Program;

use Illuminate\Http\Resources\Json\Resource;

class ProgramCategoryCollection extends Resource
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
          'Programme Category Name' =>$this->name,
          'Programme Category Description' =>$this->description

        ];
    }
}

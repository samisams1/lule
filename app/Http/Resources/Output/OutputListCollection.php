<?php

namespace App\Http\Resources\Output;

use Illuminate\Http\Resources\Json\Resource;

class OutputListCollection extends Resource
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
          'OutCome Name' =>$this->OutPutCategory,
          'Output Name' =>$this->name,
          'OutP Description' =>$this->description

        ];
    }
}

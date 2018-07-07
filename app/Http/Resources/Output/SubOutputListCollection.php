<?php

namespace App\Http\Resources\Output;

use Illuminate\Http\Resources\Json\Resource;

class SubOutputListCollection extends Resource
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
          'Sub Output Name' =>$this->name,
          'Sub Output Description' =>$this->description,
          ' OutCome Name' =>$this->OutComeList

        ];
    }
}

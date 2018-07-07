<?php

namespace App\Http\Resources\Output;

use Illuminate\Http\Resources\Json\JsonResource;

class SubOutputListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         return[
         ' Name' =>$this->name,
          ' Description' =>$this->description
         ] ;
    }
}

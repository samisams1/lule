<?php

namespace App\Http\Resources\Output;

use Illuminate\Http\Resources\Json\ResourceCollection;

class MesureOutputCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}

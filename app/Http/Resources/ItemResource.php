<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ItemResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
     public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'stock_id' => $this->stock_id,
            'unit_id' => $this->unit_id,
            'price' => $this->price,
            'date' => $this->created_at->diffForHumans()
        ];
    }
}

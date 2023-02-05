<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            // 'item' => $this->item,
            // 'price' => $this->price,
            'customer' => new CustomerResource($this->whenLoaded('customer')),
            'sell' => new SellResource($this->whenLoaded('sell')),
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SellResource extends JsonResource
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
            'customerName' => $this->customerName,
            'item' => $this->item,
            'price' => $this->price,
            'date' => $this->date,
            'amount_pay' => $this->amount_pay,
            'date_of_paid' => $this->date_of_paid,
        ];
    }
}

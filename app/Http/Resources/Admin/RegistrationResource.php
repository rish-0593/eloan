<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;

class RegistrationResource extends JsonResource
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
            'amount' => $this->amount,
            'city' => $this->city,
            'id' => $this->id,
            'mobile' => $this->mobile,
            'name' => $this->name,
            'pincode' => $this->pincode,
            'product_id' => $this->product->name,
        ];
    }
}

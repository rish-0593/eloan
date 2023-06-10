<?php

namespace App\Http\Resources\Admin;

use Illuminate\Support\Facades\Crypt;
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
            'action' => $this->actionBtns(),
        ];
    }

    protected function actionBtns() {
        $btns = [
            'view' => route('admin.registration.view', ['id' => Crypt::encrypt($this->id)])
        ];

        return $btns;
    }
}

<?php

namespace App\Http\Resources\Admin;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class TeamResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'plain_password' => $this->plain_password,
            'pending_count' => $this->pending_support_count ?? '--',
            'completed_count' => $this->completed_support_count ?? '--',
            'total_count' => $this->support_count ?? '--',
            'last_activity' => !blank($this->supportStatusUpdated?->status_updated_at) ? Carbon::parse($this->supportStatusUpdated->status_updated_at)->format('d M, Y | h:i A') : '--',
            'status' => $this->status,
        ];
    }
}

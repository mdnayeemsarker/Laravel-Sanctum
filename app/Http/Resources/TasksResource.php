<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TasksResource extends JsonResource
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
            'id' => (string) $this->id,
            'attribuits' => [
                'name' => $this->name,
                'description' => $this->description,
                'priority' => $this->priority,
            ],
            'relationship' => [
                'user_id' => (string)$this->user->id,
                'user_name' => $this->user->name,
                'user_email' => $this->user->email,
            ],
        ];
    }
}

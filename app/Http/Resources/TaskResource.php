<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array    //transform into JSON-formatted resource
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'time' => $this->time,
        ];
    }
}

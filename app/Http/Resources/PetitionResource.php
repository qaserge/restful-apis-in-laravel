<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PetitionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request); // all data
        return [
            'id' => $this->id,
            'title' => ucwords($this->title),
            'category' => $this->category,
            'description' => $this->description,
            'author' => $this->author,
            'signees' => $this->signees,
        ];
    }
}

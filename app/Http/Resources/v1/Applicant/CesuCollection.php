<?php

namespace App\Http\Resources\v1\Applicant;

use Illuminate\Http\Resources\Json\JsonResource;

class CesuCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'number' => (string)$this->number,
            'status' => (int)$this->status,
            'created_at' => $this->created_at->format('d, M Y')
        ];
    }
}

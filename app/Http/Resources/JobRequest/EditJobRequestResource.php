<?php

namespace App\Http\Resources\JobRequest;

use Illuminate\Http\Resources\Json\JsonResource;

class EditJobRequestResource extends JsonResource
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
            'title'=> $this->title,
            'category_id'=> $this->category_id,
            'subcategory_id'=> $this->subcategory_id,
            'estimate_time'=> $this->estimate_time,
            'max_price'=> $this->max_price,
            'min_price'=> $this->min_price,
            'description'=> $this->description,
            'file'=> $this->file,
            'status'=> $this->status,
        ];
    }
}

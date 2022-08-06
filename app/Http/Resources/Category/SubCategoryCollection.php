<?php

namespace App\Http\Resources\Category;

use Illuminate\Http\Resources\Json\JsonResource;

class SubCategoryCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'title'=> $this->title,
            'subcategory_id'=> $this->subcategory_id,
            'icon'=> $this->img,
            'backGroudColor'=> $this->backColor,
        ];
    }
}

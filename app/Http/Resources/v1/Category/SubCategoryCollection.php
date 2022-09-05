<?php

namespace App\Http\Resources\v1\Category;

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
            'title'=> $this->title??"",
            'image'=> $this->img??"",
            'price'=> $this->price??0,
            'child_categories' => $this->childcategories
        ];
    }
}

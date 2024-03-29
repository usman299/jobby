<?php

namespace App\Http\Resources\v1\AppSetting;

use Illuminate\Http\Resources\Json\JsonResource;

class SliderGaleryCollection extends JsonResource
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
            'sliderImage'=> $this->img,
        ];
    }
}

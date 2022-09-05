<?php

namespace App\Http\Resources\v1\AppSetting;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class FAQCollection extends JsonResource
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
            'question'=> $this->question,
            'answer'=> $this->answer,
        ];
    }
}

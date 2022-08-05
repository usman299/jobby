<?php

namespace App\Http\Resources\AppSetting;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AboutResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'description' => $this->description,
            'condition' => $this->condition,
            'copyright' => $this->copyright,


        ];
    }
}

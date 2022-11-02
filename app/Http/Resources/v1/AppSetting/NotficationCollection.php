<?php

namespace App\Http\Resources\v1\AppSetting;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class NotficationCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        Carbon::setLocale('fr');
        $date = Carbon::parse($this->created_at);
        return [
            'activity'=> $this->activity,
            'message'=> $this->message,
            'created_at' => $date->diffForHumans(),
            'status' => $this->status
        ];
    }
}

<?php

namespace App\Http\Resources\v1\Jobber;

use Illuminate\Http\Resources\Json\JsonResource;


class ProposalCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        \Carbon\Carbon::setLocale('fr');
        return [
            'title' => $this->jobrequest->title??"",
            'price' => $this->price??"",
            'created_at' => $this->created_at->diffForHumans(),
            'duration' => $this->duration??"",
            'jobber' => new ProfileResource($this->jobber)
        ];
    }
}

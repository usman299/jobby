<?php

namespace App\Http\Resources\Proposal;

use Illuminate\Http\Resources\Json\JsonResource;

class GetRejectProposalCollection extends JsonResource
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
            'jober_id'=> $this->jober_id,
            'job_req_id'=> $this->job_req_id,
            'status'=> $this->status,
            'description'=> $this->description,
            'time_limit'=> $this->time_limit,
            'price'=> $this->price,
            
        ];
    }
}

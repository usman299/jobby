<?php

namespace App\Http\Resources\v1\Common;

use Illuminate\Http\Resources\Json\JsonResource;

class Trancations extends JsonResource
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
            'transaction_id' => $this->id,
            'invoice_no' => (string)$this->invoice_no,
            'price' => (string)$this->price,
            'proposal_price' => (string)$this->contract_price,
            'percentage' => (string)$this->percentage,
            'jobber_get' => (string)$this->jobber_get,
            'type' => (string)$this->type,
            'job_title' => (string)$this->contract->jobRequest->title??"",
            'created_at' => $this->created_at->format('d, M Y'),
        ];
    }
}

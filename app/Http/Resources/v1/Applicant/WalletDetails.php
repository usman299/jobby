<?php

namespace App\Http\Resources\v1\Applicant;

use Illuminate\Http\Resources\Json\JsonResource;

class WalletDetails extends JsonResource
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
            'wallet_id' => $this->id,
            'amount' => (string)$this->amount,
            'payment_type' => (string)$this->payment_type,
            'transaction_type' => (string)$this->transaction_type,
        ];
    }
}

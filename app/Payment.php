<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function contract()
    {
        return $this->belongsTo(Contract::class, 'contract_id');
    }
}

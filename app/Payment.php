<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function contract()
    {
        return $this->belongsTo(Contract::class, 'contract_id');
    }
    public function jobber()
    {
        return $this->belongsTo(User::class, 'jobber_id');
    }
    public function applicant()
    {
        return $this->belongsTo(User::class, 'applicant_id');
    }
}

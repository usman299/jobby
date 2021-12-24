<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
     protected $fillable = [
        'sender_id', 'reciver_id','contract_id','message','star',
    ];
    public function applicant()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
   protected $fillable = [
        'jobRequest_id', 'jobber_id','status','description','time_limit','price',
    ];

    public function jobber()
    {
        return $this->belongsTo(User::class, 'jobber_id');
    }
    public function jobrequest()
    {
        return $this->belongsTo(JobRequest::class, 'jobRequest_id');
    }
}


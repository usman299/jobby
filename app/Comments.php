<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function job()
    {
        return $this->belongsTo(JobRequest::class, 'job_id');
    }
}

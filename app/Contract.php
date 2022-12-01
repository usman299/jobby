<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
     protected $fillable = [
        'proposal_id', 'jober_id','applicant_id','s_time','e_time','price','status','review_id_applicant','jobber_id_applicant','service_id','description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'applicant_id');
    }
    public function jobber()
    {
        return $this->belongsTo(User::class, 'jober_id');
    }
    public function applicant()
    {
        return $this->belongsTo(User::class, 'applicant_id');
    }
    public function service()
    {
        return $this->belongsTo(JobberServicesOffers::class, 'service_id');
    }
    public function proposal()
    {
        return $this->belongsTo(Proposal::class, 'proposal_id');
    }
    public function jobRequest()
    {
        return $this->belongsTo(JobRequest::class, 'jobRequest_id');
    }
    public function payment()
    {
        return $this->belongsTo(Payment::class, 'contract_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class JobRequest extends Model
{

    protected $fillable = [
        'applicant_id', 'category_id', 'skils', 'subcategory_id', 'title', 'estimate_time', 'max_price',
        'min_price', 'description', 'file', 'status',
    ];
    protected $dates = ['service_date'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'subcategory_id');
    }

    public function childcategory()
    {
        return $this->belongsTo(ChildCategory::class, 'childcategory_id');
    }

    public function applicant()
    {
        return $this->belongsTo(User::class, 'applicant_id');
    }

    public function country()
    {
        return $this->belongsTo(Countory::class, 'country_id');
    }

    public function proposals()
    {
        return $this->hasMany(Proposal::class, 'jobRequest_id');
    }

    public function comments()
    {
        return $this->hasMany(Comments::class, 'job_id');
    }

    public function isApplied()
    {
        $proposal = Proposal::where('jobRequest_id', $this->id)->where('jobber_id', Auth::user()->id ?? '1')->first();
        if ($proposal) {
            return true;
        } else {
            return false;
        }
    }

    public function totalProposals()
    {
        $proposal = Proposal::where('jobRequest_id', $this->id)->get();
        return $proposal->count();
    }

    public function totalViews()
    {
        $views = JobViews::where('job_id', $this->id)->get();
        return $views->count();
    }

    public function distance()
    {
        $user = auth()->user();
        $earthRadius = 6378;
        $latFrom = deg2rad($user->latitude);
        $lonFrom = deg2rad($user->longitude);
        $latTo = deg2rad($this->lat);
        $lonTo = deg2rad($this->long);
        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;
        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
                cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
        $km = ($angle * $earthRadius) * 1.6;
        return round($km, 2);
    }

    public function totalOffers()
    {
        $total = Proposal::where('jobRequest_id', '=', $this->id)->count();
        return $total;
    }

    public function totalComments()
    {
        $total = Comments::where('job_id', '=', $this->id)->count();
        return $total;
    }

    public function isHired()
    {
        $proposal = Proposal::where('jobRequest_id', '=', $this->id)->pluck('id');
        $contract = Contract::whereIn('proposal_id', $proposal)->count();
        return $contract;
    }

    public function available()
    {
        $proposal = Contract::where('jobber_id', '=', $this->id)->pluck('id');
        $contract = Contract::whereIn('proposal_id', $proposal)->count();
        return $contract;
    }

    public function duration()
    {
        (int)$startTime = date('H:i:s', strtotime($this->start_time));
        (int)$finishTime = date('H:i:s', strtotime($this->end_time));
        $totalDuration = (float)$finishTime - (float)$startTime;
//       $totalDuration = $finishTime->diffInSeconds($startTime);
        return $totalDuration;
    }
}

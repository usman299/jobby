<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class JobRequest extends Model
{

	protected $fillable = [
        'applicant_id', 'category_id','skils','subcategory_id','title','estimate_time','max_price',
        'min_price','description','file','status',
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
       $proposal = Proposal::where('jobRequest_id', $this->id)->where('jobber_id', Auth::user()->id)->first();
       if ($proposal){
           return true;
       }else{
           return  false;
       }
    }
    public function totalProposals()
    {
       $proposal = Proposal::where('jobRequest_id', $this->id)->get();
       return  $proposal->count();
    }
    public function totalViews()
    {
       $views = JobViews::where('job_id', $this->id)->get();
       return  $views->count();
    }
}


<?php

namespace App;

use Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Billable;
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName', 'role', 'phone', 'address', 'country', 'image', 'status', 'email', 'gender',
        'password', 'postalCode', 'category_id', 'subcategory_id', 'skills', 'questions', 'answers', 'description', 'document1', 'document2', 'device_token', 'dob', 'latitude', 'longitude'

    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function countory()
    {
        return $this->belongsTo(Countory::class, 'country');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'subcategory_id');
    }

    public function portfolio()
    {
        return $this->hasMany(Portfolio::class, 'jobber_id');
    }

    public function sub()
    {
        return $this->belongsTo(Subscribe::class, 'subscription');
    }

    public function hasSubscription()
    {
        $user = Auth::user();
        if ($user->subscribed('main')) {
            return true;
        } else {
            return false;
        }
    }

    public function totalJobs($status)
    {
        if ($status == 1) {
            $total = Contract::where('jober_id', '=', $this->id)->where('status', '!=', $status)->count();
        } else {
            $total = Contract::where('jober_id', '=', $this->id)->where('status', '=', $status)->count();
        }
        return $total;
    }

    public function totalReview()
    {
        $totalReviews = Reviews::where('reciver_id', '=', $this->id)->count();
        return $totalReviews;
    }

    public function rating()
    {
        $query = Reviews::where('reciver_id', '=', $this->id);
        $grandTotalCount = $query->count();
        if ($grandTotalCount != 0) {
            $totalReview = $query->sum('star');
            $totalReviews = round($totalReview / $grandTotalCount);
            return $totalReviews;
        }
        return 0;
    }

    public function reviews()
    {
        $reviews = Reviews::where('reciver_id', '=', $this->id)->latest()->get();
        return $reviews;
    }

    public function jobberSkilsSubcategory()
    {
        $jobber = JobberProfile::where('jobber_id', '=', $this->id)->first();
        $subcategory = [];
        foreach (json_decode($jobber->skills1) as $key => $row) {
            $subcategory[$key] = SubCategory::where('id', '=', $row)->first();
        }
        return $subcategory;
    }

    public function jobberSkilsChildcategory()
    {
        $jobber = JobberProfile::where('jobber_id', '=', $this->id)->first();
        $childcategory = [];
        foreach (json_decode($jobber->skills2) as $key => $row) {
            $childcategory[$key] = ChildCategory::where('id', '=', $row)->first();
        }
        return $childcategory;
    }

    public function verified()
    {
        $jobber = JobberProfile::where('jobber_id', '=', $this->id)->first();
        if ($jobber->social_security_number != null && $jobber->social_security_certificate != null && $jobber->vital_card_number != null && $jobber->vital_card != null && $jobber->eu_id_residence_permit_back != null && $jobber->eu_id_residence_permit_front != null && $jobber->eu_id_passport_back != null && $jobber->eu_id_passport_front != null && $jobber->eu_id_driving_back != null && $jobber->eu_id_driving_front != null &&
            $jobber->eu_id_card_back != null && $jobber->eu_id_card_front != null && $jobber->score != null && $jobber->rules4 != null && $jobber->rules3 != null && $jobber->rules2 != null && $jobber->rules1 != null && $jobber->answer1 != null && $jobber->answer2 != null && $jobber->answer3 != null &&
            $jobber->answer4 != null && $jobber->insurance4 != null && $jobber->insurance3 != null && $jobber->insurance2 != null && $jobber->insurance1 != null && $jobber->skills1 != null && $jobber->skills2 != null && $jobber->monday != null && $jobber->tuesday != null && $jobber->wednesday != null &&
            $jobber->thersday != null && $jobber->friday != null && $jobber->saturday != null && $jobber->sunday != null) {
            return 1;
        } else {
            return 0;
        }
    }

    public function totalHireJobber()
    {
        $total = Contract::where('status', '=', 2)->count();
        return $total;
    }

    public function activeJobs()
    {
        $total = Contract::where('status', '=', 1)->count();
        return $total;
    }
}

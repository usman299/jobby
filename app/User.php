<?php

namespace App;

use Laravel\Cashier\Billable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{   use Billable;
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName','lastName','role','phone','address','country','image','status', 'email','gender',
        'password','postalCode','category_id','subcategory_id','skills', 'questions', 'answers','description','document1','document2', 'device_token', 'dob'

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
    public function subscriptions()
    {
        return $this->belongsTo(Subscribe::class, 'subscription');
    }

}


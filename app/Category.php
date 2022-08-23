<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $fillable = [
        'img', 'title','backColor'
    ];

    public function subcategorys()
    {
        return $this->hasMany(SubCategory::class);
    }
    public function skils()
    {
        return $this->hasMany(SubCategory::class);
    }
    public function childcategorys()
    {
        return $this->hasMany(ChildCategory::class);
    }
}

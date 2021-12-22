<?php

namespace App\Http\Controllers\Front;

use App\ChildCategory;
use App\Http\Controllers\Controller;
use App\SubCategory;
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    public function subcategory($id){
       $subcategories =  SubCategory::where('category_id', '=', $id)->get();
        if ($subcategories->count()){
            return view('front.applicant.jobpost.subcategory', compact('subcategories'));
        }else{
            dd("no");
        }
    }
    public function childcatgory($id){
       $childcatgories =  ChildCategory::where('subcategory_id', '=', $id)->get();
       if ($childcatgories->count()){
           return view('front.applicant.jobpost.childcatgory', compact('childcatgories'));
       }else{
           return redirect()->route('request.subcategory', ['id' => $id]);
       }
    }
    public function request($id){
        $childcatgory =  ChildCategory::where('id', '=', $id)->first();
        return view('front.applicant.jobpost.request', compact('childcatgory'));
    }
    public function requestSubcategory($id){
        $subcategory =  SubCategory::where('id', '=', $id)->first();
        return view('front.applicant.jobpost.requestSubcategory', compact('subcategory'));
    }
}

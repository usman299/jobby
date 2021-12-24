<?php

namespace App\Http\Controllers\Front;

use App\ChildCategory;
use App\Http\Controllers\Controller;
use App\SubCategory;
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    public function subcategory($id){
        $title = 'Publier une offre';
       $subcategories =  SubCategory::where('category_id', '=', $id)->get();
        if ($subcategories->count()){
            return view('front.applicant.jobpost.subcategory', compact('subcategories', 'title'));
        }else{
            dd("no");
        }
    }
    public function childcatgory($id){
        $title = 'Publier une offre';
       $childcatgories =  ChildCategory::where('subcategory_id', '=', $id)->get();
       if ($childcatgories->count()){
           return view('front.applicant.jobpost.childcatgory', compact('childcatgories', 'title'));
       }else{
           return redirect()->route('request.subcategory', ['id' => $id]);
       }
    }
    public function request($id){
        $title = 'Publier une offre';
        $childcatgory =  ChildCategory::where('id', '=', $id)->first();
        return view('front.applicant.jobpost.request', compact('childcatgory', 'title'));
    }
    public function requestSubcategory($id){
        $title = 'Publier une offre';
        $subcategory =  SubCategory::where('id', '=', $id)->first();
        return view('front.applicant.jobpost.requestSubcategory', compact('subcategory', 'title'));
    }
}

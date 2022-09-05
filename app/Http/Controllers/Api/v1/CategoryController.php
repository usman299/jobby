<?php

namespace App\Http\Controllers\Api\v1;

use App\ChildCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\v1\Category\CategoryCollection;
use App\Http\Resources\v1\Category\SubCategoryCollection;
use App\Category;
use App\SubCategory;


class CategoryController extends Controller
{
    public function geCategory()
    {
        $category = Category::all();
        $data = CategoryCollection::collection($category);
        return response()->json($data);
    }
    public function geSubCategory($category_id)
    {
        $subcategory = SubCategory::where('category_id', '=', $category_id)->get();
        $data = SubCategoryCollection::collection($subcategory);
        return response()->json($data);
    }
    public function getChildCategories($sub_category_id)
    {
        $subcategory = ChildCategory::where('subcategory_id', '=', $sub_category_id)->get();
        $data = SubCategoryCollection::collection($subcategory);
        return response()->json($data);
    }
}

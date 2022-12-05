<?php

namespace App\Http\Controllers\Api\v1;

use App\Category;
use App\ChildCategory;
use App\Http\Controllers\Controller;
use App\Http\Resources\v1\Category\CategoryCollection;
use App\Http\Resources\v1\Category\SubCategoryCollection;
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

    public function searchCategory()
    {
        $arr = [];
        $subcategory = SubCategory::all();
        foreach ($subcategory as $key => $subcate) {
            if ($subcate->id != 1 && $subcate->id != 2 && $subcate->id != 3 && $subcate->id != 4 ){
                $arr[$key] = [
                    "maincategory_id" => $subcate->category->id,
                    "subcategory_id" => $subcate->id,
                    "childcategory_id" => 0,
                    "title" => $subcate->title??"",
                    "image" => $subcate->img??"",
                ];
            }
        }
        $arr2 = [];
        $childcategory = ChildCategory::all();
        foreach ($childcategory as $key => $childcate) {
            $arr2[$key] = [
                "maincategory_id" => $subcate->category->id,
                "subcategory_id" => $childcate->subcategory->id,
                "childcategory_id" => $childcate->id,
                "title" => $childcate->title??"",
                "image" => $childcate->img??"",
            ];
        }
        $array1 = collect($arr);
        $array2 = collect($arr2);
        $data = $array1->merge($array2);
        return $data;
    }
}

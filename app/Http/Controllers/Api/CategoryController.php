<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Category\CategoryCollection;
use App\Http\Resources\Category\SubCategoryCollection;
use App\Category;
use App\SubCategory;


class CategoryController extends Controller
{
    public function geCategory()
    {
        $category = Category::all();
        if($category->isEmpty()){
            return response()->json(['error' => 'Category not Found', 'success' => false], 404);

        }
        else{
             $data =   CategoryCollection::collection($category);
            return response()->json(['data' => $data ,'success' => true],200);
           
        }
       
    }

   

    public function geSubCategory($category_id)
    {
       $subcategory = SubCategory::where('category_id','=',$category_id)->get();
        if($subcategory->isEmpty()){
            return response()->json(['error' => 'SubCategory not Found', 'success' => false], 404);

        }
        else{
            
            $data =   SubCategoryCollection::collection($subcategory);
            return response()->json(['data' => $data ,'success' => true],200);
            
        }
    }
}

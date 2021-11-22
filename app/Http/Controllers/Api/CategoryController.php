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
           
            $success['message'] = 'Category not Found';
            $success['success'] = false;
            return response()->json( $success, 404);

        }
        else{
             $data =   CategoryCollection::collection($category);
            return response()->json($data,200);
           
        }
       
    }

   

    public function geSubCategory($category_id)
    {
       $subcategory = SubCategory::where('category_id','=',$category_id)->get();
        if($subcategory->isEmpty()){
            
            $success['message'] = 'SubCategory not Found';
            $success['success'] = false;
            return response()->json( $success, 404);

        }
        else{
            
            $data =   SubCategoryCollection::collection($subcategory);
            return response()->json($data,200);
            
        }
    }
}

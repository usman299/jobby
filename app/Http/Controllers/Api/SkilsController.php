<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Skils\CategoryRelatedSkilsCollection;
use App\Category;
use App\SubCategory;
use App\Skils;

class SkilsController extends Controller
{
    public function CategoryRelatedSkils($category_id,$subcategory_id)
    {
        $skils = Skils::where('category_id', '=', $category_id)->where('subcategory_id','=',$subcategory_id)->get();

        if ($skils->isEmpty()) {
            return response()->json(['error' => 'Skils  not Found', 'success' => false], 404);
        } else {
                $data = CategoryRelatedSkilsCollection::collection($skils);
            return response()->json(['data' => $data ,'success' => true],200);
            
        }
    }
}
 
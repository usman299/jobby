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
            $success['message'] = 'Skils  not Found';
            $success['success'] = false;
            return response()->json( $success, 200);
        } else {
                $data = CategoryRelatedSkilsCollection::collection($skils);
                $success['success'] = true;
                $success['data'] = $data;
               return response()->json($success,200);
            
        }
    }
}
 
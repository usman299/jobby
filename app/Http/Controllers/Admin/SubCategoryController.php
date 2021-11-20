<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\SubCategory;
use App\Category;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    


 public function index()
    {
         $subcategory = SubCategory::all();
        return view('admin.subcategory.index',compact('subcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.subcategory.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subcategory = new SubCategory();

       $subcategory->title = $request->title;
       $subcategory->category_id = $request->category_id;

       

       if($subcategory->save()){

        toastr()->success('Data has been saved successfully!');
         $subcategory = SubCategory::all();

       return view('admin.subcategory.index',compact('subcategory'));

       }
       else{
        toastr()->error('An error has occurred please try again.');
        return back();
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  $subcategory = SubCategory::where('id','=',$id)->first();

       $subcategory->delete();
        $subcategory = SubCategory::all();
         toastr()->error('SubCategory Data Delted');
        return view('admin.subcategory.index',compact('subcategory'));

    }
}

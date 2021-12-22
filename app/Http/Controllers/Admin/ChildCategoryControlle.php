<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\ChildCategory;
use App\Countory;
use App\Http\Controllers\Controller;
use App\SubCategory;
use Illuminate\Http\Request;

class ChildCategoryControlle extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $childcategory = ChildCategory::all();
        return view('admin.childcategory.index',compact('childcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $countory = Countory::all();
        return view('admin.childcategory.create',compact('category','countory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $countory = Countory::all();
        $childcategory = ChildCategory::where('id','=',$id)->first();

        return view('admin.childcategory.edit',compact('childcategory','countory'));
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
        $childcategory = ChildCategory::where('id','=',$id)->first();

        if($request->title) {
            $childcategory->title = $request->title;
        }
        $childcategory->countory_id = $request->countory_id;
        if($request->category_id) {
            $childcategory->category_id = $request->category_id;
        }
        if($request->subcategory_id) {
            $childcategory->subcategory_id = $request->subcategory_id;
        }
        $childcategory->backColor = $request->backColor;
        if ($request->hasfile('img')) {

            $image1 = $request->file('img');
            $name = time() . 'img' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/images/subcategory/';
            $image1->move($destinationPath, $name);
            $childcategory->img = 'admin/images/subcategory/' . $name;
        }
        if($childcategory->save()){

            toastr()->success('Data has been saved successfully!');
            return redirect()->route('childcategory.index');

        }
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Category;
use App\Countory;
use App\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

      public function index()
    {
         $category = Category::all();
        return view('admin.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countory = Countory::all();
      return view('admin.category.create',compact('countory'));
    }
    public function fetchCategory($id){
        $categories = Category::where('countory_id', '=', $id)->get();
        return response()->json($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $category = new Category();

       $category->title = $request->title;
       $category->countory_id = $request->countory_id;

       $category->backColor = $request->backColor;
       if ($request->hasfile('img')) {

            $image1 = $request->file('img');
            $name = time() . 'img' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/images/category/';
            $image1->move($destinationPath, $name);
            $category->img = 'admin/images/category/' . $name;
        }

       if($category->save()){

        toastr()->success('Data has been saved successfully!');
        $category = Category::all();
         return redirect()->route('category.index');

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
        $countory = Countory::all();
        $category = Category::where('id','=',$id)->first();

        return view('admin.category.edit',compact('category','countory'));
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

        $category = Category::where('id','=',$id)->first();

        if($request->title) {
            $category->title = $request->title;
        }
        $category->countory_id = $request->countory_id;
        $category->backColor = $request->backColor;
        if ($request->hasfile('img')) {

            $image1 = $request->file('img');
            $name = time() . 'img' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/images/category/';
            $image1->move($destinationPath, $name);
            $category->img = 'admin/images/category/' . $name;
        }

        if($category->save()){

            toastr()->success('Data has been saved successfully!');
            $category = Category::all();
            return redirect()->route('category.index');

        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::where('id','=',$id)->first();
        $category->delete();

         toastr()->error('Category Data Delted');

        $category = Category::all();
         return view('admin.category.index',compact('category'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Countory;
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
         $subcategory = SubCategory::paginate(10);;
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
        $countory = Countory::all();
        return view('admin.subcategory.create',compact('category','countory'));
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
       $subcategory->countory_id = $request->countory_id;
       $subcategory->category_id = $request->category_id;
       $subcategory->backColor = $request->backColor;
       if ($request->hasfile('img')) {

        $image1 = $request->file('img');
        $name = time() . 'img' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'admin/images/subcategory/';
        $image1->move($destinationPath, $name);
        $subcategory->img = 'admin/images/subcategory/' . $name;
    }
       if($subcategory->save()){

        toastr()->success('Data has been saved successfully!');
           return redirect()->route('subcategory.index');

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
    {    $countory = Countory::all();
        $subcategory = SubCategory::where('id','=',$id)->first();

        return view('admin.subcategory.edit',compact('subcategory','countory'));
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
        $subcategory = SubCategory::where('id','=',$id)->first();
        $subcategory->title = $request->title;
        $subcategory->countory_id = $request->countory_id;
        if($request->category_id) {
            $subcategory->category_id = $request->category_id;
        }
        $subcategory->backColor = $request->backColor;
        if ($request->hasfile('img')) {

            $image1 = $request->file('img');
            $name = time() . 'img' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/images/subcategory/';
            $image1->move($destinationPath, $name);
            $subcategory->img = 'admin/images/subcategory/' . $name;
        }
        if($subcategory->save()){

            toastr()->success('Data has been saved successfully!');
            return redirect()->route('subcategory.index');

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
    {  $subcategory = SubCategory::where('id','=',$id)->first();

       $subcategory->delete();
        $subcategory = SubCategory::all();
         toastr()->error('SubCategory Data Delted');
        return view('admin.subcategory.index',compact('subcategory'));

    }
}

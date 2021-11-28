<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Skils;
use App\Category;
use App\SubCategory;

class SkilsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skils = Skils::all();
        return view('admin.skils.index',compact('skils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.skils.create',compact('category'));
        
    }

    public function fetchSubcategory($id){
  
         $subcategory = SubCategory::where('category_id','=',$id)->get();

         return response()->json($subcategory);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $skils = new Skils();
        $skils->title = $request->title;
        $skils->category_id = $request->category_id;
        $skils->subcategory_id = $request->subcategory_id;
        if($skils->save()){
            toastr()->success('Data has been saved successfully!');
            $skils = Skils::all();
         return view('admin.skils.index',compact('skils'));
        }
        else{
            toastr()->error('Somthing Wrong!');
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
        $category = Category::all();
        $subcategory = SubCategory::all();
        $skils = Skils::where('id','=',$id)->first();
        return view('admin.skils.edit',compact('skils','category','subcategory'));

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
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $skils = Skils::where('id',$id)->first();
       
       if($skils->delete()){
         toastr()->error('Data has been Remove!');
        $skils = Skils::all();
         return view('admin.skils.index',compact('skils'));

       }
       else{
         toastr()->info('Somthing Wrong!');
        $skils = Skils::all();
         return view('admin.skils.index',compact('skils'));

       }
    }

    
}

<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Questions;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
   public function index(){
       $questions = Questions::latest()->get();
       return view('admin.questions.index', compact('questions'));
   }
   public function create(){
       $category = Category::all();
       return view('admin.questions.create', compact('category'));
   }
   public function store(Request $request){
       $question = new Questions();
       $question->category_id = $request->category_id;
       $question->subcategory_id = $request->subcategory_id;
       $question->question = $request->question;
       $question->option1 = $request->option1;
       $question->option2 = $request->option2;
       $question->option3 = $request->option3;
       $question->option4 = $request->option4;
       $question->save();
       toastr()->success('Question Creared Successfuly!');
       return redirect()->back();
   }
   public function delete($id){
       $ques = Questions::find($id);
       $ques->delete();
       toastr()->error('Question Delete Successfuly!');
       return redirect()->back();
   }
}

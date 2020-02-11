<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {   $category=Category::all();
        return view('Admin.category.index',compact('category'));
    }

    public function store(Request $request)
    {
        $category= new Category();
        $category->category_name=$request['category_name'];
        $category->save();

        return redirect()->back()->with(['success'=>'Category created successfully !!']);
    }
    public function destroy($id){
        Category::find($id)->delete();
        return redirect()->back()->with(['message'=>'Category deleted successfully !!']);
    }
    public function edit($id) {
        $data = Category::find($id);
        return response()->json(['data' => $data]);
    }
    public function update(Request $request,$id){
        $category=Category::where('id',$id)->first();
        $category->category_name=$request['category_name'];
        $category->update();
        return redirect()->back()->with(['message'=>'Category deleted successfully !!']);
    }
    
}

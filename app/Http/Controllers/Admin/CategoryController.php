<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::all();
        return view('admin.category.showcat', compact('data'));
    }
    public function create()
    {
        return view('admin.category.createcat');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required','string',
            'slug'=>'required',
            'description'=>'required',
            'meta_title'=>'required',
            'meta_keyword'=>'required',
            'meta_description'=>'required',

        ]);


        $category = new Category;
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->description = $request->description;

        // if($request->hasFile('image')){
        //     $file = $request->file('image');
        //     $ext = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$ext;
        //     $file -> move('uploads/category/'.$filename);
        //     $category->image = $filename;

        // }


        if($request->hasFile('image')) {
            $file            = $request->file('image');
            $fileName        = $file->getClientOriginalName();
            $destinationPath = public_path().'/admin/category_image' ;
            $file->move($destinationPath,$fileName);
    	}



        $category->image= $fileName;
        $category->meta_title = $request->meta_title;
        $category->meta_keyword = $request->meta_keyword;
        $category->meta_description = $request->meta_description;

        $category->status = $request->status == true ? '1':'0';

        $category->save();

        return redirect()->back()->with('message','Category Added Successfully');
    }
    public function delete($id){

        $category = Category::find($id);
        $category -> delete();
        return back()->with('message','Category deleted Successfully');
    }
    public function edit($id){
        $category = Category::find($id);
        return view('admin.category.editcat',compact('category'));
    }
    public function update(Request $request, $id){
        $category = Category :: find($id);

        $category->name = $request->name;
        $category->description = $request->description;
        $category->slug = $request->slug;

        if($request->hasFile('image')) {
            $file            = $request->file('image');
            $fileName        = $file->getClientOriginalName();
            $destinationPath = public_path().'/admin/category_image' ;
            $file->move($destinationPath,$fileName);
    	}

        $category->image = $fileName;
        $category->meta_title = $request->meta_title;
        $category->meta_keyword = $request->meta_keyword;
        $category->meta_description = $request->meta_description;

        $category->status = $request->status == true ? '1':'0';

        $category->save();
        return redirect()->back()->with('message','Category Added Successfully');
    }

}

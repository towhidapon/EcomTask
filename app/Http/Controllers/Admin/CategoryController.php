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
        return view('admin.category');
    }
    public function create()
    {
        return view('admin.createcat');
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

        return back()->with('message','Category Added Successfully');
    }

}

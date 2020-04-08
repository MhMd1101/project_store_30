<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
// use App\Requests\CategoryRequest;

class CategoryController extends Controller
{
    //
    public function index()
    {
        // list all categories
        $categories = Category::all();
        return view('category.index' , compact('categories'));
    }


    public function create()
    {
        return view('category.create');
    }


    public function store(Request $request)
    {
       // validate data
        $request->validate([
            'name' => 'required|unique:categories|min:3|max:200',
            'description' => 'required',
            'image' => 'required|image',
        ]);
       // end of validate
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->image = $request->image->store('images','public');
            // Category::create([
            //     'name' => $request -> name,
            //     'description' => $request -> description,
            //     'image' => $request->image->store('images','public'),
            // ]);
       $category->save();

       return redirect('/categories');

    }

    public function show($categoryId)
    {
        $category = Category::findOrFail($categoryId); //primary Key
        return view('category.show',compact('category'));

    }

    public function edit($categoryId)
    {
        $category = Category::findOrFail($categoryId); //primary Key
        return view('category.update',compact('category'));

    }

    public function update(Request $request)
    {
        // get data of old category
        $category = Category::findOrFail($request->categoryId);
        // validate updated data
        $request->validate([
            'name' => 'required|unique:categories|min:3|max:200',
            'description' => 'required',
        ]);
        // save new values
        $category -> name = $request -> name;
        $category-> description = $request-> description;
        $category -> save();

        return redirect('/categories');
    }

    public function destroy($categoryId)
    {
        $category = Category::findOrFail($categoryId); //primary Key
        $category->delete();
        return redirect()->back();
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;

class IndexController extends Controller
{
    //
    public function index(Request $request)
    {
        // list of categories and items
        $categories = Category::all();
        if($request -> categoryId) 
        {
            $items = Item::where('category_id', '=' , $request -> categoryId) -> get();
        }
        else
        {
            $items = Item::all();
        }
        
        return view('index', compact('categories', 'items'));
    }
}

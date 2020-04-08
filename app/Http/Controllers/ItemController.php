<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // List All Item
        $items = Item::all();
        return view('item.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate Data
        $request->validate([
            'name' => 'required|unique:categories|min:3|max:200',
            'description' => 'required',
            'price'=>'required',
            'photo'=>'required',
            'category_id'=>'required',
        ]);
        // End Of Validate
        $item = new Item;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->photo = $request->photo;
        $item->category_id = $request->category_id;

        $item->save();
        return redirect('/items');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $itemId
     * @return \Illuminate\Http\Response
     */
    public function show($itemId)
    {
        // Show The Items Value
        $item = Item::findOrfail($itemId); // Primary Key
        return view('item.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $itemId
     * @return \Illuminate\Http\Response
     */
    public function edit($itemId)
    {
        // Update The Items Value
        $item = Item::findOrfail($itemId); // Primary Key
        return view('item.update', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $itemId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //Get DAta Of Aod Items
        $item = Item::findOrfail($request->itemId);
        // Vilddate Update Date
        $request->validate([
            'name' =>'required|unique:items|min:3|max:200',
            'description' =>'required',
            'price'=>'required',
            'photo'=>'required',
            'category_id'=>'required',
        ]);
        // End Of Validate
        $item = new Item;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->photo = $request->photo;
        $item->category_id = $request->category_id;

        $item->save();
        return redirect('/items');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $itemid
     * @return \Illuminate\Http\Response
     */
    public function destroy($itemId)
    {
        // Delete The Items
        $item = Item::findOrfail($itemId);
        $item->delete();
        return redirect()->back();
    }


    // public function item_foring_key_category($itemId)
    // {
    //     $items = Item::find($itemId)->category;
    //     return $items;
    // }



}

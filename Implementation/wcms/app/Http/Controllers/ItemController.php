<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;
use DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = new Item();
        $items = $item->get();
        return view('woodcraft.inventory',[
        'item' => $items
    ]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('woodcraft.inventory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Item;
        $pictureInfo = $request->file('item_image');

        $picName = $pictureInfo->getClientOriginalName();

        $folder = "itemImages/";

        $pictureInfo->move($folder,$picName);

        $picUrl = $folder.$picName;
        if(Item::where('item_image', '=', $picUrl)->exists())
        {
            return redirect('/additems');
        }


        $item ->item_name=$request->item_name;
        $item ->item_type=$request->item_type;
        $item ->price=$request->price;
        $item ->item_description=$request->item_description;        
        
        $item->item_image=$picUrl;

        $item->save();
        return redirect()->to('/additems')->with('success','New Item Added.');
    }

    public function search(Request $request)
    {
        if(is_null($request->searchText))
        {

            $item=DB::table('item')
            ->get(); 
        }

        else
        {
           $item=DB::table('item')
            ->where('item.item_name', 'LIKE','%'.$request->searchText.'%')
            ->orWhere('item.item_type', 'LIKE','%'.$request->searchText.'%')
            ->get(); 
        }

        return view('woodcraft.searchItem', compact('item'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = Item::find($id);
        $items->delete();
        return redirect()->to('/additems')->with('success', 'Item Deleted.');
    }
}

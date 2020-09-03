<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Item::get();
        return view('items.index',['items'=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $items=new Item();
        // if($request->file()){
        //     $fileName=time().'_'.$request->photo->getClientOriginalName();
        //     $request->photo->move(public_path('uploads'),$fileName);
        //     $items->photo=$fileName;
        $items->name=$request->name;
        $items->code=$request->code;
        $items->price=$request->price;

        $items->save();

        return redirect('/items');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Gate::allows('isAdmin'))
    {
        echo "Admin alloweds<br>";
        $items=Item::find($id);
        return view('items.edit',['items'=>Item::get(),'itemcate'=>$items]);
    }else{
        dd('You are not Admin');
    }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Gate::allows('isAdmin')){
            echo "Admin alloweds<br>";
            Item::findOrFail($id)->delete();
            return redirect('/items');
        }else{
            dd('You are not Admin');
        }
    }
}

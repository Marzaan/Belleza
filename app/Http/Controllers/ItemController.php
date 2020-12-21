<?php

namespace App\Http\Controllers;

use Session;
use App\Messages;
use App\Items;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $msgbar = Messages::orderBy('id','desc')->get()->take(3);

        return view('Admin.home.addItem',['msgbar'=>$msgbar]);
    }
    public function showItem()
    {
        $item = Items::orderBy('id','desc')->get();
        $msgbar = Messages::orderBy('id','desc')->get();

        return view('Admin.home.showItem',compact('item','msgbar'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Items;
        $item->name = $request->name;
        $item->category = $request->category;
        $item->price = $request->price;
        $item->description = $request->description;
        $item->image = $request->file;

        $item->save();

        Session::flash('success','You are succesfully created an item.');

        return redirect('newItem');
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
        $item = Items::find($id);
        $msgbar = Messages::orderBy('id','desc')->get()->take(3);

        return view('Admin.home.editItem',compact('item','msgbar'));
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
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'description'=> 'required'
        ]);
        
        $item = Items::find($id);

        if($request->has('category')){
            $item->category=$request->category;
        }
        if($request->hasFile('file')){
            $item->image=$request->file;
        }

        $item->name=$request->name;
        $item->price=$request->price;
        $item->description=$request->description;

        $item->save();

        Session::flash('success','You are succesfully updated the item.');

        return redirect('showItem');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Items::find($id);

        $item->delete();

        Session::flash('success','You are succesfully trashed the item.');

        return redirect()->back();
    }
    public function trashed()
    {
        $item = Items::onlyTrashed()->get();
        $msgbar = Messages::orderBy('id','desc')->get()->take(3);

        return view('Admin.home.trashedItem',compact('item','msgbar'));
    }
    public function kill($id)
    {
        $item = Items::withTrashed()->where('id',$id)->first();

        $item->forceDelete();

        Session::flash('success','You are succesfully deleted the item.');

        return redirect()->back();
    }
    public function restore($id)
    {
        $item = Items::withTrashed()->where('id',$id)->first();

        $item->restore();

        Session::flash('success','You are succesfully restore the item.');

        return redirect()->back();
    }
}

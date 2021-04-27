<?php

namespace App\Http\Controllers;

use DB;
use App\Messages;
use App\Orders;
use App\Items;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Admin.home.homeContent')
        ->with('msgbar',Messages::orderBy('id','desc')->get()->take(3))
        ->with('unread',Messages::all()->count())
        ->with('read',Messages::onlyTrashed()->get()->count())
        ->with('item',Items::all()->count())
        ->with('order',Orders::all());
    }
    public function search(Request $request){
        $msgbar = Messages::orderBy('id','desc')->get()->take(3);
        $query = $request->get('search');
        $item = DB::table('items')
        ->where('id', 'like', '%'.$query.'%')
        ->orwhere('name', 'like', '%'.$query.'%')
        ->orWhere('price', 'like', '%'.$query.'%')
        ->orWhere('description', 'like', '%'.$query.'%')
        ->orderBy('id', 'asc')
        ->get();
        return view('Admin.home.showItem',compact('item', 'msgbar'));
    }
}

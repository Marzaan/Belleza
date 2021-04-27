<?php

namespace App\Http\Controllers;

use App\Orders;
use App\Messages;
use Session;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
    	$req = Orders::all();
    	$msgbar = Messages::orderBy('id','desc')->get()->take(3);
    	return view('Admin.home.pendingOrder',compact('msgbar','req'));
    }
    public function index2()
    {
    	$req = Orders::all();
    	$msgbar = Messages::orderBy('id','desc')->get()->take(3);
    	return view('Admin.home.orderConfirmed',compact('msgbar','req'));
    }
    public function index3()
    {
    	$req = Orders::all();
    	$msgbar = Messages::orderBy('id','desc')->get()->take(3);
    	return view('Admin.home.orderDelivered',compact('msgbar','req'));
    }
    public function index4()
    {
    	$msgbar = Messages::orderBy('id','desc')->get()->take(3);
    	return view('Admin.home.addOrder',compact('msgbar'));
    }
    public function store(Request $request)
    {
    	$req = new Orders;

		$req->productName = $request->productname;
		$req->price = $request->price;
		$req->productDescription = $request->description;
		$req->pid = $request->pcode;
		$req->productType = $request->ptype;
		$req->quantity = $request->quantity;
		$req->CustomerName = $request->customername;
		$req->phone = $request->phone;
    	$req->email = $request->email;
    	$req->address = $request->address;

    	$req->save();

    	Session::flash('success','You are succesfully confirm the order');

    	return redirect()->back();
    }
    public function confirm($id)
    {
    	$req = Orders::find($id);

    	$req->status='Confirmed';

    	$req->save();

    	Session::flash('success','You are succesfully confirmed this order.');

    	return redirect()->back();
    }
    public function complete($id)
    {
    	$req = Orders::find($id);

    	$req->status='Completed';

    	$req->save();

    	Session::flash('success','You are succesfully completed this order.');

    	return redirect()->back();
    }
    public function delete($id)
    {
        $req = Orders::find($id);

        $req->delete();

        Session::flash('success','You are succesfully deleted this order.');

        return redirect()->back();
    }

}

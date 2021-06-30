<?php

namespace App\Http\Controllers;

use Cart;
use App\Orders;
use App\Messages;
use Session;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	$req = Orders::all()->unique('email');
    	$msgbar = Messages::orderBy('id','desc')->get()->take(3);
    	return view('Admin.home.pendingOrder',compact('msgbar','req'));
    }
    public function index2()
    {
    	$req = Orders::all()->unique('email');
    	$msgbar = Messages::orderBy('id','desc')->get()->take(3);
    	return view('Admin.home.orderConfirmed',compact('msgbar','req'));
    }
    public function index3()
    {
    	$req = Orders::all()->unique('email');
    	$msgbar = Messages::orderBy('id','desc')->get()->take(3);
    	return view('Admin.home.orderDelivered',compact('msgbar','req'));
    }
    public function index4()
    {
    	$msgbar = Messages::orderBy('id','desc')->get()->take(3);
    	return view('Admin.home.addOrder',compact('msgbar'));
    }
	public function viewOrder($id){
		$req = Orders::all();
		$info = Orders::find($id);
		$msgbar = Messages::orderBy('id','desc')->get()->take(3);
		return view('Admin.home.viewOrder',compact('msgbar','req','info'));
	}
	public function view_Confirmed_Order($id){
		$req = Orders::all();
		$info = Orders::find($id);
		$msgbar = Messages::orderBy('id','desc')->get()->take(3);
		return view('Admin.home.viewConfirmedOrder',compact('msgbar','req','info'));
	}
	public function view_Delivered_Order($id){
		$req = Orders::all();
		$info = Orders::find($id);
		$msgbar = Messages::orderBy('id','desc')->get()->take(3);
		return view('Admin.home.viewDeliveredOrder',compact('msgbar','req','info'));
	}
    public function store(Request $request)
    {
		$customerName = $request->customername;
		$customerPhone = $request->phone;
    	$customerEmail = $request->email;
    	$customerAddress = $request->address;
		foreach(Cart::content() as $row) {
			$req = new Orders;
			$req->CustomerName = $customerName;
			$req->phone = $customerPhone;
			$req->email = $customerEmail;
			$req->address = $customerAddress;

			$req->pid = $row->id;
			$req->quantity = $row->qty;
			$req->productName = $row->name;
			$req->price = $row->price;
			$req->productType = $row->model->category;
			$req->productDescription = $row->model->description;

			$req->save();
		}
		Cart::destroy();
    	Session::flash('success','You are succesfully confirm the order');

    	return redirect()->back();
    }
    public function confirm($id)
    {
		$req = Orders::find($id);
		$orders = Orders::all();
		foreach($orders as $row){
			if($row->email == $req->email){
				$row->status='Confirmed';
				$row->save();
			}
		}
    	Session::flash('success','You are succesfully confirmed this order.');
    	return redirect('confirmed');
    }
    public function complete($id)
    {
		$req = Orders::find($id);
		$orders = Orders::all();
		foreach($orders as $row){
			if($row->email == $req->email){
				$row->status='Completed';
				$row->save();
			}
		}
    	Session::flash('success','You are succesfully completed this order.');

    	return redirect('completed');
    }
    public function delete($id)
    {
		$req = Orders::find($id);
		$orders = Orders::all();
		foreach($orders as $row){
			if($row->email == $req->email){
				$row->delete();
			}
		}
        Session::flash('success','You are succesfully deleted this order.');

        return redirect('completed');
    }
}

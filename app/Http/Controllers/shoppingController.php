<?php

namespace App\Http\Controllers;

use Cart;
use App\Items;
use Illuminate\Http\Request;

class shoppingController extends Controller
{
    //
    public function add_to_cart(){
        $pdt = Items::find(request()->pdt_id);

        $cartItem = Cart::add([
            'id' => $pdt->id,
            'name' => $pdt->name,
            'qty' => 1,
            'price' => $pdt->price,
        ]);
        Cart::associate($cartItem->rowId, 'App\Items');
        return redirect('cart');
    }
    public function cart(){
        return view('FrontView.cart');
    }
    public function delete_cart($id){
        Cart::remove($id);
        return redirect()->back();
    }
    public function qty_plus($id){
        $rowid = Cart::get($id);
        Cart::update($id, $rowid->qty+1);
        return redirect()->back();
    }
    public function qty_minus($id){
        $rowid = Cart::get($id);
        if($rowid->qty > 1)
            Cart::update($id, $rowid->qty-1);
        return redirect()->back();
    }
}

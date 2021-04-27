<?php

namespace App\Http\Controllers;

use DB;
use App\About;
use App\Contact;
use App\Items;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $info = About::all();
        $item = Items::all()->take(4);
        $img = Items::all()->take(4);

        $about = About::all();
        $contact = Contact::all();
    	return view('FrontView.index',compact('info','item','img','about','contact'));
    }
    public function products(){
        $item = Items::all();
    	return view('FrontView.products',compact('item'));
    }
    public function vieworder(){
    	return view('FrontView.order');
    }
    public function order($id){
        $item = Items::find($id);
        return view('FrontView.order',compact('item'));
    }
     public function face(Request $request){
        $regAd = Items::where('category', '=', 'Face')->orderBy('price','asc')->get();
        return view('FrontView.products',['item'=>$regAd]);
     }
     public function eye(Request $request){
        $regAd = Items::where('category', '=', 'Eye')->orderBy('price','asc')->get();
        return view('FrontView.products',['item'=>$regAd]);
     }
     public function lip(Request $request){
        $regAd = Items::where('category', '=', 'Lip')->orderBy('price','asc')->get();
        return view('FrontView.products',['item'=>$regAd]);
     }
     public function Gface(Request $request){
        $regAd = Items::where('category', '=', 'Face')->orderBy('price','asc')->get();
        return view('FrontView.gallery',['img'=>$regAd]);
     }
     public function Geye(Request $request){
        $regAd = Items::where('category', '=', 'Eye')->orderBy('price','asc')->get();
        return view('FrontView.gallery',['img'=>$regAd]);
     }
     public function Glip(Request $request){
        $regAd = Items::where('category', '=', 'Lip')->orderBy('price','asc')->get();
        return view('FrontView.gallery',['img'=>$regAd]);
     }
    public function about(){
        $info = About::all();
    	return view('FrontView.about',compact('info'));
    }
    public function contact(){
        $contact = Contact::all();
    	return view('FrontView.contact',compact('contact'));
    }
    public function gallery(){
        $img = Items::all();
    	return view('FrontView.gallery',['img'=>$img]);
    }
        public function search(Request $request){
        $query = $request->get('searchPro');
        $item = DB::table('items')
        ->where('id', 'like', '%'.$query.'%')
        ->orwhere('name', 'like', '%'.$query.'%')
        ->orWhere('price', 'like', '%'.$query.'%')
        ->orWhere('description', 'like', '%'.$query.'%')
        ->orderBy('id', 'asc')
        ->get();
        return view('FrontView.products',compact('item'));
    }
}

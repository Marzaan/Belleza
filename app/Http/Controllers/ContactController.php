<?php

namespace App\Http\Controllers;

use Session;
use App\Contact;
use App\Messages;
use Illuminate\Http\Request;

class ContactController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $contact = Contact::all();
        $msgbar = Messages::orderBy('id','desc')->get()->take(3);

        if($contact->count()==0){
            return view('Admin.home.contact',['msgbar'=>$msgbar]);
        }
        else{
            return view('Admin.home.showContact',compact('contact','msgbar'));
        }
    	
    }
    public function store(Request $request)
    {
    	$contact = new Contact;

    	$contact->address = $request->address;
    	$contact->contact1 = $request->phn1;
    	$contact->contact2 = $request->phn2;
    	$contact->contact3 = $request->phn3;
    	$contact->email1 = $request->email1;
    	$contact->email3 = $request->email2;

    	$contact->save();

    	Session::flash('success','You are succesfully created a contact-info.');

    	return redirect()->back();
    }
    public function edit($id)
    {
        $contact = Contact::find($id);
        $msgbar = Messages::orderBy('id','desc')->get()->take(3);

        return view('Admin.home.editContact',compact('contact','msgbar'));
    }
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);

        if($request->has('phn1')){
            $contact->contact1 = $request->phn1;
        }
        if($request->has('phn2')){
            $contact->contact2 = $request->phn2;
        }
        if($request->has('phn3')){
            $contact->contact3 = $request->phn3;
        }
        if($request->has('email1')){
            $contact->email1 = $request->email1;
        }
        if($request->has('email2')){
            $contact->email3 = $request->email2;
        }
        if($request->has('address')){
            $contact->address = $request->address;
        }

        $contact->save();

        Session::flash('success','Your are succesfully updated this.');

        return redirect('info2');
    }
    public function destroy($id)
    {
        $contact = Contact::find($id);

        $contact->delete();

        Session::flash('success','You are succesfully deleted this.');

        return redirect()->back();
    }
}

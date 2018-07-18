<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }


//    public function storeContact(Request $request)
//    {
//        //Validate contact fields to ensure none empty fields
//        $this->validate($request,[
//            'name' => 'required',
//            'email' => 'required',
//            'phone_number' => 'required',
//            'message' => 'required',
//
//        ]);
//        //dd($request);
//        //Create Contact
//
//
//
//        $contact = new Contact;
//        $contact->name = $request->input('name');
//        $contact->email = $request->input('email');
//        $contact->phone_number = $request->input('phone_number');
//        $contact->message = $request->input('message');
//        $contact->save();
//
//        return redirect('/contact')->with('success', 'Message Sent Successfully');
//    }


}

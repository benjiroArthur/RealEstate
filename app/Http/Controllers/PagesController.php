<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Properties;

class PagesController extends Controller
{
    public function index()
    {
//

        $premiumProperties = Properties::where('available', '=', 1)->where('class','=','1')->orderBy('created_at', 'desc')->paginate(4);
        $allProperties = Properties::where('available', '=',1)->orderBy('created_at', 'desc')->paginate(30);
        $resentProperties = Properties::where('available', '=',1)->orderBy('created_at', 'desc')->paginate(10);

        return view('pages.index')->with('premiumProperties', $premiumProperties)->with('allProperties', $allProperties)->with('resentProperties', $resentProperties);
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
//


}

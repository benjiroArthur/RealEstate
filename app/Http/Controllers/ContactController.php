<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        //Validate contact fields to ensure none empty fields
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'message' => 'required',

        ]);

        $data = Array
        (
            'name'      =>      $request->name,
            'email'     =>      $request->email,
            'phone'     =>      $request->phone_number,
            'message'   =>      $request->message
        );
        $fromEmail= $request->email;
        $subject = 'Contact Us';

        Mail::to('majorcaios@gmail.com')->send(new EMail($data,$fromEmail,$subject));

        //dd($request);
        //Create Contact

//        $contact = new Contact;
//        $contact->name = $request->input('name');
//        $contact->email = $request->input('email');
//        $contact->phone_number = $request->input('phone_number');
//        $contact->message = $request->input('message');
//        $contact->save();



        return redirect('/contact')->with('success', 'Thank You For Contacting Us');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NotifyMe;

class notifyMeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //        Validate post fields to ensure none empty fields
        $this->validate($request,[
            'email' => 'required|string|email|max:255|unique:notify_me',
        ]);

        // Store email in the notify_me table
        $notifyMe = new NotifyMe;

        $notifyMe->email = $request->input('email');
        $notifyMe->save();
        return redirect()->back()->with('success', 'Thanks For The Request, We Will Notify You');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete notify me entry

        //find email by is
        $notifyMe = NotifyMe::find($id);
        $notifyMe->delete();
    }
}

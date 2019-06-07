<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        if(auth()->user()->admin !== 1)
        {
            return redirect('/dashboard');
        }
        else
        {
            return view('auth.addUser');
        }
    }
}

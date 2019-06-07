<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Properties;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        if(auth()->user()->admin !== 1)
        {
            return redirect('/dashboard');
        }
        return view('users.viewAll')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'phone_number' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $users = new User;
        $users->name = strtoupper($request->input('name'));
        $users->email = strtolower($request->input('email'));
        $users->username = $request->input('username');
        $users->phone_number = $request->input('phone_number');
        $users->password = Hash::make($request->input('password'));
        $users->save();
        return redirect('/admin')->with('success','User Added Successfully');
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
        $users = User::find($id);
        $users->name = strtoupper($request->input('name'));
        $users->email = strtolower($request->input('email'));
        $users->username = $request->input('username');
        $users->phone_number = $request->input('phone_number');
        $users->save();
        if(auth()->user()->admin == 1) {
            return redirect('/admin')->with('success','User Profile Updated Successfully');
        }
        else{
            return redirect('/dashboard')->with('success','Your Profile Is Updated Successfully');
        }
    }


    public function updatePwd(Request $request, $id)
    {
        $this->validate($request,[
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::find($id);

        $user->password = Hash::make($request->input('password'));
        $user->pwdChange = 1;
        $user->save();
        return redirect('/dashboard');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        if(auth()->user()->admin == 1)
        {
            $user->delete();
            return redirect('/admin')->with('success', 'User Deleted Successfully');
        }
        else
            {
                return redirect('/dashboard')->with('error', 'Unauthorised Access');
            }
    }
}

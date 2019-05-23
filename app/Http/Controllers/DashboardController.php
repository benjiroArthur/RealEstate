<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Properties;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->pwdChange == 1)
        {
            if (auth()->user()->admin == 0)
            {
                $user_id = auth()->user()->id;
                $user = User::find($user_id);
                $available = count(Properties::where('available', '=', '1')->where('user_id', '=', $user_id)->get());
                $unavailable = count(Properties::where('available', '=', '0')->where('user_id', '=', $user_id)->get());

                $rentAvailable = count(Properties::where('available', '=', '1')
                    ->where('transaction_type', '=', 'Rent')
                    ->where('user_id', '=', $user_id)->get());

                $saleAvailable = count(Properties::where('available', '=', '1')
                    ->where('transaction_type', '=', 'Sale')
                    ->where('user_id', '=', $user_id)->get());

                $leaseAvailable = count(Properties::where('available', '=', '1')
                    ->where('transaction_type', '=', 'Lease')
                    ->where('user_id', '=', $user_id)->get());

                $rentUnavailable = count(Properties::where('available', '=', '0')
                    ->where('transaction_type', '=', 'Rent')
                    ->where('user_id', '=', $user_id)->get());

                $saleUnavailable = count(Properties::where('available', '=', '0')
                    ->where('transaction_type', '=', 'Sale')
                    ->where('user_id', '=', $user_id)->get());

                $leaseUnavailable = count(Properties::where('available', '=', '0')
                    ->where('transaction_type', '=', 'Lease')
                    ->where('user_id', '=', $user_id)->get());

                return view('dashboard')->with('properties', $user->properties)
                    ->with('available', $available)
                    ->with('unavailable', $unavailable)
                    ->with('rentAvailable', $rentAvailable)
                    ->with('saleAvailable', $saleAvailable)
                    ->with('leaseAvailable', $leaseAvailable)
                    ->with('rentUnavailable', $rentUnavailable)
                    ->with('saleUnavailable', $saleUnavailable)
                    ->with('leaseUnavailable', $leaseUnavailable);
            }
            else{
                $user = User::all();
                $properties = Properties::all();
                return view('/admin')->with('user', $user)->with('properties', $properties);
            }
        }
        else{
            return view('/change_password');
        }
    }

    public function sidebar(){
        return view('inc.navigator');
    }

    public function viewAll(){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('properties.viewall')->with('properties', $user->properties);
    }

    public function update(){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('properties.update')->with('properties', $user->properties);
    }
}

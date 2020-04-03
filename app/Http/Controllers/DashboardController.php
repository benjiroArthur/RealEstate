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
        $userId = auth()->user()->id;
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
                $users = User::all();
                $properties = Properties::all();

                $available = count(Properties::where('available', '=', '1')->get());
                $unavailable = count(Properties::where('available', '=', '0')->get());

                $rentAvailable = count(Properties::where('available', '=', '1')
                    ->where('transaction_type', '=', 'Rent')->get());

                $saleAvailable = count(Properties::where('available', '=', '1')
                    ->where('transaction_type', '=', 'Sale')->get());

                $leaseAvailable = count(Properties::where('available', '=', '1')
                    ->where('transaction_type', '=', 'Lease')->get());

                $rentUnavailable = count(Properties::where('available', '=', '0')
                    ->where('transaction_type', '=', 'Rent')->get());

                $saleUnavailable = count(Properties::where('available', '=', '0')
                    ->where('transaction_type', '=', 'Sale')->get());

                $leaseUnavailable = count(Properties::where('available', '=', '0')
                    ->where('transaction_type', '=', 'Lease')->get());
                return view('/admin')
                    ->with('users', $users)
                    ->with('properties', $properties)
                    ->with('available', $available)
                    ->with('unavailable', $unavailable)
                    ->with('rentAvailable', $rentAvailable)
                    ->with('saleAvailable', $saleAvailable)
                    ->with('leaseAvailable', $leaseAvailable)
                    ->with('rentUnavailable', $rentUnavailable)
                    ->with('saleUnavailable', $saleUnavailable)
                    ->with('leaseUnavailable', $leaseUnavailable);
            }
        }
        else{
            return view('/users/changePwd')->with('userId', $userId);
        }
    }

    public function sidebar(){
        return view('inc.navigator');
    }

    public function viewAll(){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        //return $user->properties;
        return view('properties.viewall')->with('properties', $user->properties);
    }

    public function update(){
        $user_id = auth()->user()->id;
        $properties = Properties::where('user_id', $user_id)->get();

        return view('properties.update')->with('properties', $properties);
    }
}

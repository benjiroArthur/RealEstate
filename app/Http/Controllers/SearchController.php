<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Properties;

class searchController extends Controller
{
    //return search form
    public function searchform()
    {
        return view('inc.searchform');
    }

    public function searchResult(Request $request)
    {
        $properties = Properties::query();
        // search for property based on transaction type

        if($request->has('transaction_type')&& $request->input('transaction_type') != '' )
        {
            $properties->where('transaction_type', $request->input('transaction_type'));

        }

        if($request->has('structure_type') && $request->input('structure_type') != '' )
        {
            $properties->where('structure_type', $request->input('structure_type'));

        }

        if($request->has('property_type') && $request->input('property_type') != '' )
        {
            $properties->where('property_type', $request->input('property_type'));

        }

        if($request->has('address') && $request->input('address') != '' )
        {
            $properties->where('address', 'LIKE', '%'.$request->input('address').'%');

        }

        if($request->has('description') && $request->input('description') != '' )
        {
            $properties->where('description', 'LIKE', '%'.$request->input('description').'%');

        }

        if($request->has('name') && $request->input('name') != '' )
        {
            $properties->where('name', '=', $request->input('name'));

        }




        //dd($properties->get());
        return view('pages.search')->with('properties', $properties->orderBy('created_at','desc')->paginate(4));

    }
}

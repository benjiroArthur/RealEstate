<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Properties;

class PagesController extends Controller
{
    public function index()
    {


        $premiumProperties = Properties::where('available', '=', 1)->where('class','=','1')->orderBy('created_at', 'desc')->paginate(4, ['*'],'p1');
        $resentProperties = Properties::where('available', '=',1)->orderBy('created_at', 'desc')->paginate(5, ['*'],'p2');
        $allProperties = Properties::where('available', '=',1)->orderBy('created_at', 'desc')->paginate(30, ['*'],'p3');



        return view('pages.index',compact('premiumProperties','allProperties', 'resentProperties'));



    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }



}

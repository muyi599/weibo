<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class StaticPagesController extends Controller
{
    public function home(){
        $feed_items = [];
        if(Auth::check()){
            $feed_items = Auth::user()->feed()->paginate(30);
        }
        return view("StaticPages/home",\compact('feed_items'));
    }

    public function help()
    {
        return view('StaticPages/help');
    }

    public function about()
    {
        return view('StaticPages/about');
    }
}

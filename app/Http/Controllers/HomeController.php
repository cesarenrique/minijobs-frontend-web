<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){
        $urls=[];
        return view('welcome')->with('urls',$urls);
    }
}

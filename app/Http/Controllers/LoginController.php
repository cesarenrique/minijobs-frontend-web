<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login(){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/user';
        $urls["inicio"]=url('/home');
        return view('auth.login')->with('urls',$urls);
    }
}

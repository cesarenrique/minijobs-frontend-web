<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login(){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/user/login';
        $urls["inicio"]=url('/home');
        return view('auth.login')->with('urls',$urls);
    }

    public function logout(){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/user/logout';
        $urls["inicio"]=url('/home');
        return view('auth.logout')->with('urls',$urls);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    //
    public function registro(){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/user';
        $urls["inicio"]=url('/login');
        return view('auth.registro')->with('urls',$urls);
    }
}

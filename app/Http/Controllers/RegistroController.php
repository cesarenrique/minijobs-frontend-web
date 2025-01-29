<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    //
    public function registro(){

        $url=env('API_CONSUME').'/user';
        $url2=url('/administrador/principal');
        return view('auth.registro')->with('url',$url)->with('url2',$url2);
    }
}

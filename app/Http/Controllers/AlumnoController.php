<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    //

    public function anuncios(){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/anuncio';
        $urls["anuncio"]=url('/anuncio');
        return view('alumno.anuncios')->with('urls',$urls);
    }
}

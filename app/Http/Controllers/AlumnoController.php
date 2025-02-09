<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    //

    public function anuncios($idAlumno){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/anuncio';
        $urls["anuncio"]=url('/alumno').'/'.$idAlumno.'/anuncio';
        return view('alumno.anuncios')->with('urls',$urls);
    }


    public function postulados($idAlumno){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/candidato/'.$idAlumno.'/anuncios';
        $urls["anuncio"]=url('/alumno').'/'.$idAlumno.'/anuncio';
        return view('alumno.anuncios2')->with('urls',$urls);
    }

    public function postularAlumnoAnuncio($idAlumno,$idAnuncio){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/anuncio/'.$idAnuncio.'/complete';
        $urls["api2"]=env('API_CONSUME').'/alumno/'.$idAlumno.'/user';
        $urls["api3"]=env('API_CONSUME').'/candidato';
        $urls["api5"]=env('API_CONSUME').'/candidato/existe/'.$idAnuncio.'/'.$idAlumno;
        $urls["postular"]=url('/alumno');
        return view('alumno.anuncio')->with('urls',$urls)->with('anuncio_id',$idAnuncio)->with('alumno_id',$idAlumno);
    }
}

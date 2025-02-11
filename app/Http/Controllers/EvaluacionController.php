<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvaluacionController extends Controller
{
    //
    public function evaluacion($id){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/alumno/'.$id.'/evaluacion';
        $urls["encargado"]=url('/encargado/');
        return view('evaluacion.evaluaciones')->with('urls',$urls);
    }
}

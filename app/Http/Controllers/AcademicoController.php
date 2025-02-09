<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademicoController extends Controller
{
    //

    public function modelo(){
        $urls=[];
        $urls["perfil"]=url('user');
        return view('academico.modelo')->with('urls',$urls);
    }

    public function tipoCarreras(){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/tipocarrera';
        $urls["rama"]=url('academico/tipocarrera');
        return view('academico.tipoCarreras')->with('urls',$urls);
    }

    public function tipoRamaCarreras(){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/tiporamacarrera';
        $urls["rama"]=url('academico/tiporamacarrera');
        return view('academico.tipoRamaCarreras')->with('urls',$urls);
    }


    public function carreras(){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/carrera';
        $urls["rama"]=url('academico/carrera');
        return view('academico.carreras')->with('urls',$urls);
    }

    public function centros(){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/centro';
        $urls["rama"]=url('academico/centro');
        return view('academico.centros')->with('urls',$urls);
    }

    public function centro($id){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/centro/'.$id.'/carreras';
        $urls["carrera"]=url('academico/carrera');
        return view('academico.centro')->with('urls',$urls);
    }

    public function tipoCarrera($id){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/tipocarrera/'.$id.'/tiporamacarreras';
        $urls["carrera"]=url('academico/tiporamacarrera');
        return view('academico.tipoCarrera')->with('urls',$urls);
    }

    public function tipoRamaCarrera($id){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/tiporamacarrera/'.$id.'/carreras';
        $urls["carrera"]=url('academico/carrera');
        return view('academico.tipoRamaCarrera')->with('urls',$urls);
    }


    public function carrera($id){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/carrera/'.$id.'/complete';
        $urls["asignatura"]=url('academico/asignatura');
        return view('academico.carrera')->with('urls',$urls);
    }
}

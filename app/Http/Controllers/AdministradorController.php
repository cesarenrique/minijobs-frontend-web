<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class AdministradorController extends Controller
{
    //
    public function busquedas(){
        return view('administrador.busquedas');
    }



    public function crear(){
        return view('administrador.crearAdministrador');
    }

    public function administradores(){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/administrador/complete';
        $urls["user"]=url('/user');
        return view('administrador.administradores')->with('urls',$urls);
    }

    public function encargados(){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/encargado/complete';
        $urls["user"]=url('/user');
        return view('administrador.encargados')->with('urls',$urls);
    }

    public function reclutadores(){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/reclutador/complete';
        $urls["user"]=url('/user');
        return view('administrador.reclutadores')->with('urls',$urls);
    }

    public function profesores(){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/profesor/complete';
        $urls["user"]=url('/user');
        return view('administrador.profesores')->with('urls',$urls);
    }

    public function alumnos(){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/alumno/complete';
        $urls["user"]=url('/user');
        return view('administrador.alumnos')->with('urls',$urls);
    }

    public function sinroles(){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/sinrol/complete';
        $urls["user"]=url('/user');
        return view('administrador.sinroles')->with('urls',$urls);
    }

    public function empresas(){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/empresa';
        $urls["empresa"]=url('/empresa');

        return view('administrador.empresas')->with('urls',$urls);
    }
}

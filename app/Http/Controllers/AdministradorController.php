<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class AdministradorController extends Controller
{
    //
    public function principal(){
        return view('administrador.principal');
    }

    public function administradores(){
        $url=env('API_CONSUME').'/administrador/complete';
        return view('administrador.administradores')->with('url',$url);
    }

    public function encargados(){
        $url=env('API_CONSUME').'/encargado/complete';
        return view('administrador.encargados')->with('url',$url);
    }

    public function reclutadores(){
        $url=env('API_CONSUME').'/reclutador/complete';
        return view('administrador.reclutadores')->with('url',$url);
    }

    public function profesores(){
        $url=env('API_CONSUME').'/profesor/complete';
        return view('administrador.profesores')->with('url',$url);
    }

    public function alumnos(){
        $url=env('API_CONSUME').'/alumno/complete';
        return view('administrador.alumnos')->with('url',$url);
    }

    public function sinroles(){
        $url=env('API_CONSUME').'/sinrol/complete';
        return view('administrador.sinroles')->with('url',$url);
    }
}

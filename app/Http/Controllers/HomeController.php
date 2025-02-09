<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){
        $urls=[];
        return view('home.welcome')->with('urls',$urls);
    }

    public function homeAdministrador(){
        $urls=[];
        $urls["perfil"]=url('user');
        return view('home.welcomeAdministrador')->with('urls',$urls);
    }

    public function homeEncargado(){
        $urls=[];
        $urls["perfil"]=url('user');
        return view('home.welcomeEncargado')->with('urls',$urls);
    }

    public function homeReclutador(){
        $urls=[];
        $urls["perfil"]=url('user');
        return view('home.welcomeReclutador')->with('urls',$urls);
    }

    public function homeSinRol(){
        $urls=[];
        $urls["perfil"]=url('user');
        return view('home.welcomeSinRol')->with('urls',$urls);
    }


    public function homeProfesor(){
        $urls=[];
        $urls["perfil"]=url('user');
        return view('home.welcomeAlumno')->with('urls',$urls);
    }

    public function homeAlumno(){
        $urls=[];
        $urls["perfil"]=url('user');
        return view('home.welcomeAlumno')->with('urls',$urls);
    }
}

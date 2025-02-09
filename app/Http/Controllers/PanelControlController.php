<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelControlController extends Controller
{
    //
    public function panelcontrolAnonimo(){
        $urls=[];
        $urls["crear"]=route('administrador.crear');
        return view('panelcontrol.panelcontrolAnonimo')->with('urls',$urls);
    }

    public function panelcontrolAdministrador(){
        $urls=[];
        $urls["crear"]=route('administrador.crear');
        return view('panelcontrol.panelcontrolAdministrador')->with('urls',$urls);
    }

    public function panelcontrolEncargado(){
        $urls=[];
        $urls["api"]=env('API_CONSUME')."/encargado/user/";
        $urls["crear"]=url('encargado/');
        return view('panelcontrol.panelcontrolEncargado')->with('urls',$urls);
    }

    public function panelcontrolReclutador(){
        $urls=[];
        $urls["api"]=env('API_CONSUME')."/reclutador/user/";
        $urls["crear"]=url('reclutador/');
        return view('panelcontrol.panelcontrolReclutador')->with('urls',$urls);
    }

    public function panelcontrolSinRol(){
        $urls=[];
        $urls["api"]=env('API_CONSUME')."/sinrol/user/";
        $urls["crear"]=url('sinrol/');
        return view('panelcontrol.panelcontrolSinRol')->with('urls',$urls);
    }

    public function panelcontrolAlumno(){
        $urls=[];
        $urls["api"]=env('API_CONSUME')."/alumno/user/";
        $urls["crear"]=url('alumno/');
        return view('panelcontrol.panelcontrolAlumno')->with('urls',$urls);
    }
}

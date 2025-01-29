<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function rolchoice($username){
        $urls=[];
        $urls["principal"]=env('API_CONSUME').'/user/username/'.$username;
        $urls["alumno"]=url('/usuario/rolchoice/alumno');
        $urls["profesor"]=url('/usuario/rolchoice/profesor');
        $urls["encargado"]=url('/usuario/rolchoice/encargado');
        $urls["reclutador"]=url('/usuario/rolchoice/reclutador');



        return view('usuario.rolchoice')->with('urls',$urls)->with('username',$username);
    }

    public function rolchoiceAlumno($id){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/alumno';
        return view('usuario.rolchoiceAlumno')->with('urls',$urls)->with('user_id',$id);
    }

    public function rolchoiceProfesor($id){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/profesor';
        return view('usuario.rolchoiceProfesor')->with('urls',$urls)->with('user_id',$id);
    }

    public function rolchoiceReclutador($id){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/reclutador';
        return view('usuario.rolchoiceReclutador')->with('urls',$urls)->with('user_id',$id);
    }

    public function rolchoiceEncargado($id){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/encargado';
        return view('usuario.rolchoiceEncargado')->with('urls',$urls)->with('user_id',$id);
    }
}

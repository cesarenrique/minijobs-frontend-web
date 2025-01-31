<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function usuarios(){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/user';
        $urls["user"]=url('/user');
        return view('administrador.usuarios')->with('urls',$urls);
    }

    public function usuario($id){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/user/'.$id;
        $urls["roles"]=url('/usuario/'.$id.'/rolchoice2');
        $urls["encargado"]=url('/encargado/');
        return view('usuario.usuario')->with('urls',$urls);
    }

    public function anonimo(){
        $urls=[];
        return view('usuario.anonimo')->with('urls',$urls);
    }


    public function rolchoice($username){
        $urls=[];
        $urls["principal"]=env('API_CONSUME').'/user/username/'.$username;
        $urls["alumno"]=url('/usuario/rolchoice/alumno');
        $urls["profesor"]=url('/usuario/rolchoice/profesor');
        $urls["encargado"]=url('/usuario/rolchoice/encargado');
        $urls["reclutador"]=url('/usuario/rolchoice/reclutador');

        return view('usuario.rolchoice')->with('urls',$urls)->with('username',$username);
    }

    public function rolchoice2($id){
        $urls=[];
        $urls["principal"]=env('API_CONSUME').'/user/'.$id;
        $urls["alumno"]=url('/usuario/rolchoice/alumno');
        $urls["profesor"]=url('/usuario/rolchoice/profesor');
        $urls["encargado"]=url('/usuario/rolchoice/encargado');
        $urls["reclutador"]=url('/usuario/rolchoice/reclutador');
        $urls["administrador"]=url('/usuario/rolchoice/administrador');
        return view('usuario.rolchoice2')->with('urls',$urls)->with('$id',$id);
    }
    public function rolchoiceAdministrador($id){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/administrador';
        $urls["roles"]=url('/usuario/'.$id.'/rolchoice2');
        return view('usuario.rolchoiceAlumno')->with('urls',$urls)->with('user_id',$id);
    }

    public function rolchoiceAlumno($id){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/alumno';
        $urls["roles"]=url('/usuario/'.$id.'/rolchoice2');
        return view('usuario.rolchoiceAlumno')->with('urls',$urls)->with('user_id',$id);
    }

    public function rolchoiceProfesor($id){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/profesor';
        $urls["roles"]=url('/usuario/'.$id.'/rolchoice2');
        return view('usuario.rolchoiceProfesor')->with('urls',$urls)->with('user_id',$id);
    }

    public function rolchoiceReclutador($id){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/reclutador';
        $urls["roles"]=url('/usuario/'.$id.'/rolchoice2');
        return view('usuario.rolchoiceReclutador')->with('urls',$urls)->with('user_id',$id);
    }

    public function rolchoiceEncargado($id){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/encargado';
        $urls["roles"]=url('/usuario/'.$id.'/rolchoice2');
        return view('usuario.rolchoiceEncargado')->with('urls',$urls)->with('user_id',$id);
    }
}

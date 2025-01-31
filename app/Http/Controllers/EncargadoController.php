<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EncargadoController extends Controller
{
    //

    public function crearEmpresa($id){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/empresa';
        return view('encargado.crearEmpresa')->with('urls',$urls)->with('encargado_id',$id);
    }

    public function previoCrearEmpresa($userid){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/encargado/user/'.$userid;
        $urls["empresa"]=url('/encargado');
        return view('encargado.crearEmpresa')->with('urls',$urls)->with('encargado_id',$id);
    }

    public function empresa($id){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/empresa/'.$id;
        $urls["cargos"]=url('/empresa').'/'.$id.'/cargo';
        $urls["anuncios"]=url('/empresa').'/'.$id.'/anuncio';
        return view('encargado.empresa')->with('urls',$urls)->with('empresa_id',$id);
    }

    public function cargosEmpresa($id){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/empresa/'.$id;
        $urls["api2"]=env('API_CONSUME').'/empresa/'.$id.'/cargo';
        $urls["empresa"]=url('/empresa');
        $urls["cargp"]=url('/cargo');
        return view('encargado.empresaCargos')->with('urls',$urls)->with('empresa_id',$id);
    }

    public function anunciosEmpresa($id){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/empresa/'.$id;
        $urls["api3"]=env('API_CONSUME').'/empresa/'.$id.'/anuncio';
        $urls["anuncio"]=url('/anuncio');
        return view('encargado.empresaAnuncios')->with('urls',$urls)->with('empresa_id',$id);
    }

    public function crearCargo($id){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/cargo';
        $urls["api2"]=env('API_CONSUME').'/cargoempresa';
        return view('encargado.crearCargo')->with('urls',$urls)->with('empresa_id',$id);
    }

    public function cargos(){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/cargo';
        $urls["cargo"]=url('/cargo');
        return view('encargado.cargos')->with('urls',$urls);
    }

    public function cargo($id){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/cargo/'.$id;
        return view('encargado.cargo')->with('urls',$urls)->with('empresa_id',$id);
    }
}

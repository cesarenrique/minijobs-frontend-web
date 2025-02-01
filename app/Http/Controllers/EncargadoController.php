<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EncargadoController extends Controller
{
    //
    public function crear($idEncargado){
        $urls=[];
        return view('encargado.crearEncargado')->with('urls',$urls)->with('encargado_id',$idEncargado);
    }

    public function crearEmpresa($idEncargado){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/empresa';
        return view('encargado.crearEmpresa')->with('urls',$urls)->with('encargado_id',$idEncargado);
    }

    public function empresas($idEncargado){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/encargado/'.$idEncargado."/user";
        $urls["api2"]=env('API_CONSUME').'/encargado/'.$idEncargado."/empresa";
        $urls["empresa"]=url('');

        return view('encargado.EncargadoEmpresa')->with('urls',$urls)->with('encargado_id',$idEncargado);
    }

    public function empresa($idEmpresa){
        $urls=[];
        $urls["api2"]=env('API_CONSUME').'/empresa/'.$idEmpresa;
        $urls["cargos"]=url('/empresa').'/'.$idEmpresa.'/cargo';
        $urls["anuncios"]=url('/empresa').'/'.$idEmpresa.'/anuncio';
        return view('encargado.empresa')->with('urls',$urls)->with('empresa_id',$idEmpresa);
    }

    public function empresaEncargado($idEncargado,$idEmpresa){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/encargado/'.$idEncargado."/user";
        $urls["api2"]=env('API_CONSUME').'/empresa/'.$idEmpresa;
        $urls["cargos"]=url('/empresa').'/'.$idEmpresa.'/cargo';
        $urls["anuncios"]=url('/empresa').'/'.$idEmpresa.'/anuncio';
        $urls["cargoEscoger"]=url('/encargado').'/'.$idEncargado.'/empresa'.'/'.$idEmpresa.'/cargos';
        $urls["crearCargo"]=url('/encargado').'/'.$idEncargado.'/empresa'.'/'.$idEmpresa.'/crearCargo';
        return view('encargado.empresa2')->with('urls',$urls)->with('empresa_id',$idEmpresa)->with('encargado_id',$idEncargado);
    }


    public function encargadoEmpresaCargosEscoger($idEncargado,$idEmpresa){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/encargado/'.$idEncargado."/user";
        $urls["api2"]=env('API_CONSUME').'/empresa/'.$idEmpresa;
        $urls["api3"]=env('API_CONSUME').'/cargo';
        $urls["cargo"]=url('/encargado').'/'.$idEncargado.'/empresa'.'/'.$idEmpresa.'/cargo';
        return view('encargado.cargos2')->with('urls',$urls)->with('empresa_id',$idEmpresa)->with('encargado_id',$idEncargado);
    }

    public function encargadoEmpresaCargoEscoger($idEncargado,$idEmpresa,$idCargo){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/encargado/'.$idEncargado."/user";
        $urls["api2"]=env('API_CONSUME').'/empresa/'.$idEmpresa;
        $urls["api3"]=env('API_CONSUME').'/cargo/'.$idCargo;
        $urls["api4"]=env('API_CONSUME').'/cargoempresa';
        $urls["cargo"]=url('/cargo');
        $urls["empresaCargos"]=url('/empresa')."/".$idEmpresa."/cargo";
        return view('encargado.cargo2')->with('urls',$urls)->with('empresa_id',$idEmpresa)->with('encargado_id',$idEncargado)->with('cargo_id',$idCargo);
    }


    public function cargosEmpresa($idEmpresa){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/empresa/'.$idEmpresa;
        $urls["api2"]=env('API_CONSUME').'/empresa/'.$idEmpresa.'/cargo';
        $urls["empresa"]=url('/empresa');
        $urls["cargo"]=url('/cargo');
        return view('encargado.empresaCargos')->with('urls',$urls)->with('empresa_id',$idEmpresa);
    }

    public function anunciosEmpresa($idEmpresa){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/empresa/'.$idEmpresa;
        $urls["api3"]=env('API_CONSUME').'/empresa/'.$idEmpresa.'/anuncio';
        $urls["anuncio"]=url('/anuncio');
        return view('encargado.empresaAnuncios')->with('urls',$urls)->with('empresa_id',$idEmpresa);
    }

    public function crearCargo($idEncargado,$idEmpresa){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/cargo';
        $urls["api2"]=env('API_CONSUME').'/cargoempresa';
        $urls["cargo"]=url('/encargado').'/'.$idEncargado.'/empresa'.'/'.$idEmpresa.'/cargo';
        return view('encargado.crearCargo')->with('urls',$urls)->with('empresa_id',$idEmpresa)->with('encargado_id',$idEncargado);;
    }

    public function cargos(){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/cargo';
        $urls["cargo"]=url('/cargo');
        return view('encargado.cargos')->with('urls',$urls);
    }

    public function cargo($idCargo){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/cargo/'.$idCargo;
        return view('encargado.cargo')->with('urls',$urls)->with('empresa_id',$idCargo);
    }
}

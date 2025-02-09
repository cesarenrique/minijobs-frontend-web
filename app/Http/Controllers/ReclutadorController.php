<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReclutadorController extends Controller
{


    public function misAnuncioAlumno($idAnuncio){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/anuncio/'.$idAnuncio.'/complete';
        $urls["api2"]=env('API_CONSUME').'/candidato/'.$idAnuncio.'/usuarios';
        $urls["user"]=url('/alumno');
        return view('reclutador.misAlumnos')->with('urls',$urls);
    }

    //
    public function anuncio($idAnuncio){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/anuncio/'.$idAnuncio.'/complete';
        $urls["cargos"]=url('/empresa');
        return view('reclutador.anuncio')->with('urls',$urls);
    }

    public function anuncios(){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/anuncio';
        $urls["anuncio"]=url('/anuncio');
        return view('reclutador.anuncios')->with('urls',$urls);
    }


    public function misAnuncios($idReclutador){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/candidato/'.$idReclutador.'/anuncios';
        $urls["alumno"]=url('/anuncio');
        return view('reclutador.anuncios2')->with('urls',$urls);
    }

    public function crearAnuncio($idReclutador,$idEncargado,$idEmpresa,$idCargo){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/cargoempresa/existe/'.$idEmpresa.'/'.$idCargo;
        $urls["api2"]=env('API_CONSUME').'/anuncio';
        $urls["api3"]=env('API_CONSUME').'/empresa/'.$idEmpresa;
        $urls["api4"]=env('API_CONSUME').'/cargo/'.$idCargo;
        return view('reclutador.crearAnuncio')->with('urls',$urls)->with('reclutador_id',$idReclutador);
    }

    public function empresas($idReclutador){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/empresa';
        $urls["empresa"]=url('/reclutador')."/".$idReclutador;

        return view('reclutador.empresas')->with('urls',$urls);
    }

    public function empresaReclutadorEscoger($idReclutador,$idEncargado,$idEmpresa){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/encargado/'.$idEncargado."/user";
        $urls["api2"]=env('API_CONSUME').'/empresa/'.$idEmpresa;
        $urls["api3"]=env('API_CONSUME').'/reclutador/'.$idReclutador."/user";
        $urls["api4"]=env('API_CONSUME').'/empresa/'.$idEmpresa.'/cargo';
        $urls["empresa"]=url('/reclutador')."/".$idReclutador;
        $urls["cargo"]=url('/reclutador')."/".$idReclutador.'/encargado/'.$idEncargado.'/empresa/'.$idEmpresa.'/cargo';
        return view('reclutador.empresaCargos')->with('urls',$urls)->with('empresa_id',$idEmpresa)->with('encargado_id',$idEncargado);
    }

    public function reclutadorEmpresaCargoEscoger($idReclutador,$idEncargado,$idEmpresa,$idCargo){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/encargado/'.$idEncargado."/user";
        $urls["api2"]=env('API_CONSUME').'/empresa/'.$idEmpresa;
        $urls["api3"]=env('API_CONSUME').'/cargo/'.$idCargo;
        $urls["api4"]=env('API_CONSUME').'/reclutador/'.$idReclutador."/user";
        $urls["api5"]=env('API_CONSUME').'/empresareclutador/existe/'.$idEmpresa.'/'.$idReclutador;
        $urls["api6"]=env('API_CONSUME').'/empresareclutador';
        $urls["cargo"]=url('/cargo');
        $urls["creaAnuncio"]=url('/reclutador')."/".$idReclutador.'/encargado/'.$idEncargado.'/empresa/'.$idEmpresa.'/cargo/'.$idCargo.'/crearAnuncio';
        return view('reclutador.cargo2')->with('urls',$urls)->with('empresa_id',$idEmpresa)->with('encargado_id',$idEncargado)->with('cargo_id',$idCargo)->with('reclutador_id',$idReclutador);
    }

    public function candidatos($idAnuncio){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/candidato/'.$idAnuncio.'/alumnos';
        $urls["alumno"]=url('/alumno');
        return view('reclutador.anuncios2')->with('urls',$urls);
    }

}

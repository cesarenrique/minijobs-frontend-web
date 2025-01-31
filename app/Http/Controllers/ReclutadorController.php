<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReclutadorController extends Controller
{
    //
    public function anuncio($id){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/anuncio/'.$id.'/complete';
        $urls["cargos"]=url('/empresa').'/'.$id.'/cargo';
        return view('reclutador.anuncio')->with('urls',$urls)->with('empresa_id',$id);
    }
}

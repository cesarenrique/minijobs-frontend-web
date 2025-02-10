<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    //

    public function skills(){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/skill';
        $urls["user"]=url('/skill');
        return view('skill.skills')->with('urls',$urls);
    }


    public function skill($id){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/skill/'.$id;
        $urls["anuncio"]=url('/skill').'/'.$id.'/anuncios';
        $urls["usuario"]=url('/skill').'/'.$id.'/usuarios';
        return view('skill.skill')->with('urls',$urls);
    }

    public function skillAnuncios($id){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/skill/'.$id.'/anuncios';
        $urls["anuncio"]=url('/anuncio');
        return view('skill.anuncios')->with('urls',$urls);
    }

    public function skillUsuarios($id){
        $urls=[];
        $urls["api"]=env('API_CONSUME').'/skill/'.$id.'/usuarios';
        $urls["user"]=url('/user');
        return view('skill.usuarios')->with('urls',$urls);
    }
}

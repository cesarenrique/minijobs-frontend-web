<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademicoController extends Controller
{
    //

    public function modelo(){
        $urls=[];
        $urls["perfil"]=url('user');
        return view('academico.modelo')->with('urls',$urls);
    }
}

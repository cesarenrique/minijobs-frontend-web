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
}

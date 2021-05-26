<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distribuidor;
use Illuminate\Support\Facades\DB;

class DistribuidorController extends Controller
{
    function formDistribuidor(){

        return \view('crearDistributed');
    }
        
    function crearDistribuidor(Request $request){
        
        $distribuidor = new Distribuidor;
        
        $distribuidor->nombre = $request->nombreDistributed;
        
        $distribuidor->save();
        
        return back()->with('mensaje','Distribuidor Creado');
        
    }

    function todosDistribuidores(){

        $listDistribuidores = Distribuidor::all();
            
        return \view('listaDistribuidor', compact('listDistribuidores'));
    }

}

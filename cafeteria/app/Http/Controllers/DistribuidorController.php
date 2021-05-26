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

    function editarDistribuidor(Request $request,$id){

        $datoDistribuidor = Distribuidor::find($id);

        return view('editarDistribuidor', compact('datoDistribuidor'));
    }

    function actualizarDistribuidor(Request $request,$id){

        $distActualizar = Distribuidor::find($id);

        $distActualizar->nombre = $request->nombreDistriEdit;

        $distActualizar->save();
        
        return redirect()->route('list-distributed');
    }

}

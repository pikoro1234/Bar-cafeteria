<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Distribuidor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /* funcion que se ejecuta el la raiz */
    function index(){

        return \view('welcome');
    }


    function listadoProductos(){
        
        $productos = Producto::all();   

        return \view('principal', compact('productos'));
    }



    /* mostramos el formulario de crear producto */
    function mostrarFormCreate(){

        return \view('crearProducto');
    }


    /* creacion de productos */
    function crearProducto(Request $request){

        $producto = new Producto;

        $producto->usuario_id = Auth::id();

        $producto->foto = $request->imagen;

        $producto->nombre = $request->nombre;

        $producto->descripcion = $request->descripcion;

        $producto->estado = $request->estado;

        $producto->precio = $request->precio;

        $producto->categoria_id = $request->categoria;

        $producto->distribuidor_id = $request->distribuidor;

        $producto->save();

        /* return back()->with('mensaje','Producto Creado'); */

        return redirect()->route('principal');

    }



    /* listado principal del dashboard */
    function listadoPrincipal() {
        
        return \view('principal');
    }


}

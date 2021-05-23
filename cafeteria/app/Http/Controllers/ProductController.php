<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Distribuidor;
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

        $producto->foto = $request->imagen;

        $producto->nombre = $request->nombre;

        $producto->descripcion = $request->descripcion;

        $producto->estado = $request->estado;

        $producto->precio = $request->precio;

        $producto->categoria = $request->categoria;

        $producto->distribuidor = $request->distribuidor;

        $categoria = new Categoria;

        $categoria->nombre = $request->categoria;

        $categoria->idproducto = $producto->id;

        $producto->save();

        $categoria->save();

        /* return back()->with('mensaje','Producto Creado'); */

        return view('principal',)->with('mensaje','Producto Creado');

    }



    /* listado principal del dashboard */
    function listadoPrincipal() {
        
        return \view('principal');
    }


}

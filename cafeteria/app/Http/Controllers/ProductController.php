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

        $productos = Producto::all(); 

        $categorias = Categoria::all();

        return \view('welcome', compact('productos','categorias'));
    }



    /* mostramos todos los productos */
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

        $imagen = $request->file('imagen');

        $nombre = time()."_".$imagen->getClientOriginalName();

        $imagen->move('uploads', $nombre);

        $producto->foto = $nombre;

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

    /* editar producto */
    function editarProducto(Request $request,$id){

        $datosProductos = Producto::find($id);

        $categorias = Categoria::all();

        $distribuidores = Distribuidor::all();

        return view('editarProducto', compact('datosProductos', 'categorias', 'distribuidores'));
    }

    function actualizarProducto(Request $request,$id){

        $prodActualizar = Producto::find($id);

        if ($request->imagenProd) {
            
            $prodActualizar->foto = $request->imagenProd;
        }

        if ($request->nombreProd) {
            
            $prodActualizar->nombre = $request->nombreProd;
        }

        if ($request->descripcionProd) {
            
            $prodActualizar->descripcion = $request->descripcionProd;
        }

        if ($request->estadoProd) {
            
            $prodActualizar->estado = $request->estadoProd;
        }

        if ($request->precioProd) {
            
            $prodActualizar->precio = $request->precioProd;
        }

        if ($request->categoriaProd) {
            
            $prodActualizar->categoria_id = $request->categoriaProd;
        }

        if ($request->distribuidorProd) {
            
            $prodActualizar->distribuidor_id = $request->distribuidorProd;
        }


        $prodActualizar->save();
        
        return redirect()->route('principal');
    }



}

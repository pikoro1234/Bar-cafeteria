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
    function index(Request $request){       

        $categorias = Categoria::all();

        if ($request->categoriaHome) {

            $categoria = $request->categoriaHome;

            $categoria = intval($categoria);

            $productosA = DB::table('categorias')
            ->join('productos', 'productos.categoria_id', '=', 'categorias.id')
            ->where('productos.categoria_id', '=', $categoria)
            ->get();
            
            return \view('welcome', compact('productosA','categorias'));

        }elseif($request->desde && $request->hasta){

            $desde = intval($request->desde);

            $hasta = intval($request->hasta);

            $productosA = DB::table('productos')
            ->whereBetween('precio', [$desde, $hasta])
            ->get();

            return \view('welcome', compact('productosA','categorias'));

        }elseif($request->fecha){

            $fecha = $request->fecha;

            if ($fecha == 'ascendente') {
                
                $productosA = DB::table('productos')
                ->orderBy('created_at', 'asc')
                ->get();
            }

            if($fecha == 'descendente'){

                $productosA = DB::table('productos')
                ->orderBy('created_at', 'desc')
                ->get();
            }

            return \view('welcome', compact('productosA','categorias'));

        }else{

            $productos = Producto::all(); 

            return \view('welcome', compact('productos','categorias'));
        }
        
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

    /* actualizar producto escogido */
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

    /* elimimar producto */
    function eliminarProducto($id){

        $eliminarProducto = Producto::find($id);

        $eliminarProducto->delete();

        return redirect()->route('principal');
    }



}

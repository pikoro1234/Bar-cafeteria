<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /* funcion que se ejecuta el la raiz */
    function index(){

        return \view('welcome');
    }



    /* mostramos el formulario de crear producto */
    function mostrarFormCreate(){

        return \view('crearProducto');
    }


    /* creacion de productos */
    function crearProducto(){

    }



    /* listado principal del dashboard */
    function listadoPrincipal() {
        
        return \view('principal');
    }



    function formCliente() {
        
        return \view('clientecrear');
    }


}

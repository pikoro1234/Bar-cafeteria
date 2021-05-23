<?php

use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DistributedController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* RUTAS PARA LOS PRODUCTOS */
Route::get('/', [ProductController::class, 'index'])->name('welcome');

Route::get('/crear-producto', [ProductController::class, 'mostrarFormCreate'])->name('create-product');

Route::post('/crear-producto', [ProductController::class, 'crearProducto'])->name('create-product');

Route::get('/principal', [ProductController::class, 'listadoProductos'])->name('principal');

Route::get('/add-cliente', [ProductController::class, 'formCliente'])->name('crear-cliente');

Route::post('/add-cliente', [ProductController::class, 'crearCliente'])->name('crear-cliente');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [ProductController::class, 'dashBoard'])->name('dashboard');



/* RUTAS PARA LAS CATEGORIAS */
Route::get('/crear-categoria', [CategoriaController::class, 'formCategoria'])->name('create-category');

Route::post('/crear-categoria', [CategoriaController::class, 'crearCategoria'])->name('create-category');



/* RUTAS PARA LOS DISTRIBUIDORES */
Route::get('/crear-distribuidor', [DistributedController::class, 'formDistribuidor'])->name('create-distributed');

Route::post('/crear-distribuidor', [DistributedController::class, 'crearDistribuidor'])->name('create-distributed');



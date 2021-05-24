<?php

use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DistribuidorController;

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

Route::get('/principal/editarProducto/{id}', [ProductController::class,'editarProducto'])->name('edit-product');

Route::post('/principal/editarProducto/{id}', [ProductController::class,'actualizarProducto'])->name('edit-product');

Route::get('/add-cliente', [ProductController::class, 'formCliente'])->name('crear-cliente');

Route::post('/add-cliente', [ProductController::class, 'crearCliente'])->name('crear-cliente');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [ProductController::class, 'dashBoard'])->name('dashboard');



/* RUTAS PARA LAS CATEGORIAS */
Route::get('/crear-categoria', [CategoriaController::class, 'formCategoria'])->name('create-category');

Route::post('/crear-categoria', [CategoriaController::class, 'crearCategoria'])->name('create-category');

Route::get('/crear-producto', [CategoriaController::class, 'listadoCategorias'])->name('create-product');



/* RUTAS PARA LOS DISTRIBUIDORES */
Route::get('/crear-distribuidor', [DistribuidorController::class, 'formDistribuidor'])->name('create-distributed');

Route::post('/crear-distribuidor', [DistribuidorController::class, 'crearDistribuidor'])->name('create-distributed');



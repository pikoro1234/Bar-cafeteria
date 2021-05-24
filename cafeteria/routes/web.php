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

Route::middleware(['auth:sanctum', 'verified'])->get('/crear-producto', [ProductController::class, 'mostrarFormCreate'])->name('create-product');

Route::middleware(['auth:sanctum', 'verified'])->post('/crear-producto', [ProductController::class, 'crearProducto'])->name('create-product');

Route::middleware(['auth:sanctum', 'verified'])->get('/principal', [ProductController::class, 'listadoProductos'])->name('principal');

Route::middleware(['auth:sanctum', 'verified'])->get('/principal/editarProducto/{id}', [ProductController::class,'editarProducto'])->name('edit-product');

Route::middleware(['auth:sanctum', 'verified'])->post('/principal/editarProducto/{id}', [ProductController::class,'actualizarProducto'])->name('edit-product');

Route::middleware(['auth:sanctum', 'verified'])->get('/principal/eliminarProducto/{id}', [ProductController::class,'eliminarProducto'])->name('delete-product');

Route::middleware(['auth:sanctum', 'verified'])->get('/add-cliente', [ProductController::class, 'formCliente'])->name('crear-cliente');

Route::middleware(['auth:sanctum', 'verified'])->post('/add-cliente', [ProductController::class, 'crearCliente'])->name('crear-cliente');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [ProductController::class, 'dashBoard'])->name('dashboard');



/* RUTAS PARA LAS CATEGORIAS */
Route::middleware(['auth:sanctum', 'verified'])->get('/crear-categoria', [CategoriaController::class, 'formCategoria'])->name('create-category');

Route::middleware(['auth:sanctum', 'verified'])->post('/crear-categoria', [CategoriaController::class, 'crearCategoria'])->name('create-category');

Route::middleware(['auth:sanctum', 'verified'])->get('/crear-producto', [CategoriaController::class, 'listadoCategorias'])->name('create-product');



/* RUTAS PARA LOS DISTRIBUIDORES */
Route::middleware(['auth:sanctum', 'verified'])->get('/crear-distribuidor', [DistribuidorController::class, 'formDistribuidor'])->name('create-distributed');

Route::middleware(['auth:sanctum', 'verified'])->post('/crear-distribuidor', [DistribuidorController::class, 'crearDistribuidor'])->name('create-distributed');



<?php

use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\ProductController;
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



Route::get('/', [ProductController::class, 'index'])->name('welcome');

Route::get('/crear-producto', [ProductController::class, 'mostrarFormCreate'])->name('create-product');

Route::post('/crear-producto', [ProductController::class, 'crearProducto'])->name('create-product');

Route::get('/principal', [ProductController::class, 'listadoPrincipal'])->name('principal');

Route::get('/add-cliente', [ProductController::class, 'formCliente'])->name('crear-cliente');

Route::post('/add-cliente', [ProductController::class, 'crearCliente'])->name('crear-cliente');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [Controller::class, 'dashBoard'])->name('dashboard');

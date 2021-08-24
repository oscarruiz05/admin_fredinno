<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VendedoresController;
use App\Http\Controllers\VentaController;
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;
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

// Example Routes



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');

// Rutas para productos
Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::post('/productos/create', [ProductoController::class, 'store'])->name('productos.store');
Route::get('/productos/show/{id}', [ProductoController::class, 'show'])->name('productos.show');
Route::post('/porductos/update', [ProductoController::class, 'update'])->name('productos.update');
Route::post('/productos/delete/{id}', [ProductoController::class, 'delete']);



Route::post('/productos/get/product/{id}', [ProductoController::class, 'get_product'])->name('productos.get');

// Rutas para ventas
Route::get('/ventas', [VentaController::class, 'index'])->name('ventas');
Route::get('/factura', [FacturaController::class, 'index'])->name('facturas');
Route::get('/factura/ver', [FacturaController::class, 'show'])->name('facturas.show');
Route::get('/vendedores', [VendedoresController::class, 'index'])->name('vendedores');
Route::get('/usuarios', [AdminController::class, 'index'])->name('usuarios');
Route::post('/usuarios/crear', [AdminController::class, 'store'])->name('usuarios.store');



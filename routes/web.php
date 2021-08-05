<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\VentaController;
use Database\Seeders\ProductoVentaSeeder;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/*Controlador para inventario "¨Productos" */

Route::middleware(['auth:sanctum', 'verified'])->get('/productos', [ProductoController::class, 'index'])
->name('productos');

Route::middleware(['auth:sanctum', 'verified'])->get('/productos/create', [ProductoController::class, 'create'])
->name('productos.create');

Route::middleware(['auth:sanctum', 'verified'])->get('/productos/store', [ProductoController::class, 'store'])
->name('productos.store');

/* Controlador para empleados */
Route::middleware(['auth:sanctum', 'verified'])->get('/empleados', [EmpleadoController::class, 'index'])
->name('empleados');

Route::middleware(['auth:sanctum', 'verified'])->get('/empleados/create', [EmpleadoController::class, 'index'])
->name('empleados.create');

/* Controlador para Ventas */
Route::middleware(['auth:sanctum', 'verified'])->get('/ventas', [VentaController::class, 'index'])
->name('ventas');

Route::middleware(['auth:sanctum', 'verified'])->get('/ventas/create', [VentaController::class, 'index'])
->name('ventas.create');
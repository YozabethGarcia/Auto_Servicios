<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
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

Route::get('/productos', [ProductoController::class, 'index']);

Route::get('/productos/create', [ProductoController::class, 'create']);

Route::get('/productos/{id}', [ProductoController::class, 'show']);


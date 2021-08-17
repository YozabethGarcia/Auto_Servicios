<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\PlanillaController;
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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



/*Controlador para inventario "¨Productos" */

Route::middleware(['auth:sanctum', 'verified'])->get('/productos', [ProductoController::class, 'index'])
->name('productos.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/productos/create', [ProductoController::class, 'create'])
->name('productos.create');

Route::middleware(['auth:sanctum', 'verified'])->post('/productos', [ProductoController::class, 'store'])
->name('productos.store');

Route::middleware(['auth:sanctum', 'verified'])->put('/productos/{producto}', [ProductoController::class, 'update'])
->name('productos.update');

Route::middleware(['auth:sanctum', 'verified'])->get('/productos/{producto}', [ProductoController::class, 'show'])
->name('productos.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/productos/{producto}/edit', [ProductoController::class, 'edit'])
->name('productos.edit');


/* Controlador para empleados */
Route::middleware(['auth:sanctum', 'verified'])->get('/empleados', [EmpleadoController::class, 'index'])
->name('empleados.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/empleados/create', [EmpleadoController::class, 'create'])
->name('empleados.create');

Route::middleware(['auth:sanctum', 'verified'])->post('/empleados', [EmpleadoController::class, 'store'])
->name('empleados.store');

Route::middleware(['auth:sanctum', 'verified'])->put('/empleados/{empleado}', [EmpleadoController::class, 'update'])
->name('empleados.update');

Route::middleware(['auth:sanctum', 'verified'])->get('/empleados/{empleado}', [EmpleadoController::class, 'show'])
->name('empleados.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/empleados/{empleado}/edit', [EmpleadoController::class, 'edit'])
->name('empleados.edit');



/* Controlador para compras */
Route::middleware(['auth:sanctum', 'verified'])->get('/compras', [CompraController::class, 'index'])
->name('compras.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/compras/create', [CompraController::class, 'create'])
->name('compras.create');

Route::middleware(['auth:sanctum', 'verified'])->post('/compras', [CompraController::class, 'store'])
->name('compras.store');

Route::middleware(['auth:sanctum', 'verified'])->put('/compras/{compra}', [CompraController::class, 'update'])
->name('compras.update');

Route::middleware(['auth:sanctum', 'verified'])->get('/compras/{compra}', [CompraController::class, 'show'])
->name('compras.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/compras/{compra}/edit', [CompraController::class, 'edit'])
->name('compras.edit');



/* Controlador para ventas */
Route::middleware(['auth:sanctum', 'verified'])->get('/ventas', [VentaController::class, 'index'])
->name('ventas.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/ventas/create', [VentaController::class, 'create'])
->name('ventas.create');

Route::middleware(['auth:sanctum', 'verified'])->post('/ventas', [VentaController::class, 'store'])
->name('ventas.store');

Route::middleware(['auth:sanctum', 'verified'])->put('/ventas/{venta}', [CompraController::class, 'update'])
->name('ventas.update');

Route::middleware(['auth:sanctum', 'verified'])->get('/ventas/{venta}', [VentaController::class, 'show'])
->name('ventas.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/ventas/{venta}/edit', [VentaController::class, 'edit'])
->name('ventas.edit');

/* Controlador para planillas */
Route::middleware(['auth:sanctum', 'verified'])->get('/planillas', [PlanillaController::class, 'index'])
->name('planillas.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/planillas/create', [PlanillaController::class, 'create'])
->name('planillas.create');


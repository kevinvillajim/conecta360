<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FinanzasController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProformaController;
use App\Http\Controllers\ProformalistController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AllDataController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);


Route::get('/citas', [CitaController::class, 'index']);
Route::get('/citas/{id}', [CitaController::class, 'show']);
Route::post('/citas', [CitaController::class, 'store']);
Route::put('/citas/{id}', [CitaController::class, 'update']);
Route::delete('/citas/{id}', [CitaController::class, 'destroy']);

Route::get('/clientes', [ClienteController::class, 'index']);
Route::get('/clientes/{id}', [ClienteController::class, 'show']);
Route::post('/clientes', [ClienteController::class, 'store']);
Route::put('/clientes/{id}', [ClienteController::class, 'update']);
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy']);

Route::get('/finanzas', [FinanzasController::class, 'index']);
Route::get('/finanzas/{id}', [FinanzasController::class, 'show']);
Route::post('/finanzas', [FinanzasController::class, 'store']);
Route::put('/finanzas/{id}', [FinanzasController::class, 'update']);
Route::delete('/finanzas/{id}', [FinanzasController::class, 'destroy']);

Route::get('/inventarios', [InventarioController::class, 'index']);
Route::get('/inventarios/{id}', [InventarioController::class, 'show']);
Route::post('/inventarios', [InventarioController::class, 'store']);
Route::put('/inventarios/{id}', [InventarioController::class, 'update']);
Route::delete('/inventarios/{id}', [InventarioController::class, 'destroy']);

Route::get('/metas', [MetaController::class, 'index']);
Route::get('/metas/{id}', [MetaController::class, 'show']);
Route::post('/metas', [MetaController::class, 'store']);
Route::put('/metas/{id}', [MetaController::class, 'update']);
Route::delete('/metas/{id}', [MetaController::class, 'destroy']);

Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/productos/{id}', [ProductoController::class, 'show']);
Route::post('/productos', [ProductoController::class, 'store']);
Route::put('/productos/{id}', [ProductoController::class, 'update']);
Route::delete('/productos/{id}', [ProductoController::class, 'destroy']);

Route::get('/proformas', [ProformaController::class, 'index']);
Route::get('/proformas/{id}', [ProformaController::class, 'show']);
Route::post('/proformas', [ProformaController::class, 'store']);
Route::put('/proformas/{id}', [ProformaController::class, 'update']);
Route::delete('/proformas/{id}', [ProformaController::class, 'destroy']);

Route::get('/proformalist', [ProformalistController::class, 'index']);
Route::get('/proformalist/{id}', [ProformalistController::class, 'show']);
Route::post('/proformalist', [ProformalistController::class, 'store']);
Route::put('/proformalist/{id}', [ProformalistController::class, 'update']);
Route::delete('/proformalist/{id}', [ProformalistController::class, 'destroy']);

Route::get('/proveedores', [ProveedorController::class, 'index']);
Route::get('/proveedores/{id}', [ProveedorController::class, 'show']);
Route::post('/proveedores', [ProveedorController::class, 'store']);
Route::put('/proveedores/{id}', [ProveedorController::class, 'update']);
Route::delete('/proveedores/{id}', [ProveedorController::class, 'destroy']);

Route::get('/roles', [RolController::class, 'index']);
Route::get('/roles/{id}', [RolController::class, 'show']);
Route::post('/roles', [RolController::class, 'store']);
Route::put('/roles/{id}', [RolController::class, 'update']);
Route::delete('/roles/{id}', [RolController::class, 'destroy']);

Route::get('/tareas', [TareaController::class, 'index']);
Route::get('/tareas/{id}', [TareaController::class, 'show']);
Route::post('/tareas', [TareaController::class, 'store']);
Route::put('/tareas/{id}', [TareaController::class, 'update']);
Route::delete('/tareas/{id}', [TareaController::class, 'destroy']);

Route::get('/teams', [TeamController::class, 'index']);
Route::get('/teams/{id}', [TeamController::class, 'show']);
Route::post('/teams', [TeamController::class, 'store']);
Route::put('/teams/{id}', [TeamController::class, 'update']);
Route::delete('/teams/{id}', [TeamController::class, 'destroy']);


Route::get('/all', [AllDataController::class, 'index']);

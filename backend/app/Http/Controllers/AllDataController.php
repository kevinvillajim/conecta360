<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

class AllDataController extends Controller
{
    public function index()
    {
        $data = [
            'users' => app(UserController::class)->index(),
            'citas' => app(CitaController::class)->index(),
            'clientes' => app(ClienteController::class)->index(),
            'finanzas' => app(FinanzasController::class)->index(),
            'inventarios' => app(InventarioController::class)->index(),
            'metas' => app(MetaController::class)->index(),
            'productos' => app(ProductoController::class)->index(),
            'proformas' => app(ProformaController::class)->index(),
            'proformalists' => app(ProformalistController::class)->index(),
            'proveedores' => app(ProveedorController::class)->index(),
            'roles' => app(RolController::class)->index(),
            'tareas' => app(TareaController::class)->index(),
            'teams' => app(TeamController::class)->index(),
        ];

        return response()->json($data, 200);
    }
}

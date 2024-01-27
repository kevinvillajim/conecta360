<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inventario::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inventario = new Inventario();
        $inventario->id_producto = $request->id_producto;
        $inventario->stock = $request->stock;
        $inventario->created_at = $request->created_at;
        $inventario->updated_at = $request->updated_at;
        $inventario->save();
        return response()->json(['message' => 'Inventario created sucessfully'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $inventario = Inventario::find($id);
        if ($inventario) {
            return $inventario;
        } else {
            return response()->json(['message' => 'Inventario not found'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventario $inventario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $inventario = Inventario::find($id);
        if ($inventario) {
            $inventario = new Inventario();
            $inventario->id_producto = $request->id_producto;
            $inventario->stock = $request->stock;
            $inventario->created_at = $request->created_at;
            $inventario->updated_at = $request->updated_at;
            $inventario->save();
            return response()->json(['message' => 'Inventario created sucessfully'], 200);
        } else {
            return response()->json(['message' => 'Inventario not found'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $inventario = Inventario::find($id);
        if ($inventario) {
            $inventario->delete();
            return response()->json(['message' => 'Inventario deleted sucessfully'], 200);
        } else {
            return response()->json(['message' => 'Inventario not found'], 404);
        }
    }
}

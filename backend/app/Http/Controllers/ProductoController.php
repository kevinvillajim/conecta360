<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Producto::all();
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
        $producto = new Producto();
        $producto->name = $request->name;
        $producto->description = $request->description;
        $producto->model = $request->model;
        $producto->img = $request->img;
        $producto->id_proveedor = $request->id_proveedor;
        $producto->id_categoria = $request->id_categoria;
        $producto->minStock = $request->minStock;
        $producto->percent = $request->percent;
        $producto->cost = $request->cost;
        $producto->costIva = $request->costIva;
        $producto->costMayor = $request->costMayor;
        $producto->costPVP = $request->costPVP;
        $producto->id_user_created = $request->id_user_created;
        $producto->id_user_updated = $request->id_user_updated;
        $producto->created_at = $request->created_at;
        $producto->updated_at = $request->updated_at;
        $producto->save();
        return response()->json(['message' => 'Producto created sucessfully'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $producto = Producto::find($id);
        if ($producto) {
            return $producto;
        } else {
            return response()->json(['message' => 'Producto not found'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        if ($producto) {
            $producto->name = $request->name;
            $producto->description = $request->description;
            $producto->model = $request->model;
            $producto->img = $request->img;
            $producto->id_proveedor = $request->id_proveedor;
            $producto->id_categoria = $request->id_categoria;
            $producto->minStock = $request->minStock;
            $producto->percent = $request->percent;
            $producto->cost = $request->cost;
            $producto->costIva = $request->costIva;
            $producto->costMayor = $request->costMayor;
            $producto->costPVP = $request->costPVP;
            $producto->id_user_created = $request->id_user_created;
            $producto->id_user_updated = $request->id_user_updated;
            $producto->created_at = $request->created_at;
            $producto->updated_at = $request->updated_at;
            $producto->save();
            return response()->json(['message' => 'Producto created sucessfully'], 200);
        } else {
            return response()->json(['message' => 'Producto not found'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        if ($producto) {
            $producto->delete();
            return response()->json(['message' => 'Producto deleted sucessfully'], 200);
        } else {
            return response()->json(['message' => 'Producto not found'], 404);
        }
    }
}

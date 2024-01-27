<?php

namespace App\Http\Controllers;

use App\Models\Finanzas;
use Illuminate\Http\Request;

class FinanzasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Finanzas::all();
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
        $finanzas = new Finanzas();
        $finanzas->date = $request->date;
        $finanzas->id_cliente = $request->id_cliente;
        $finanzas->id_proveedor = $request->id_proveedor;
        $finanzas->concept = $request->concept;
        $finanzas->description = $request->description;
        $finanzas->amount = $request->amount;
        $finanzas->status = $request->status;
        $finanzas->img = $request->img;
        $finanzas->id_user_created = $request->id_user_created;
        $finanzas->id_user_updated = $request->id_user_updated;
        $finanzas->id_user_assigned = $request->id_user_assigned;
        $finanzas->id_supervisor_assigned = $request->id_supervisor_assigned;
        $finanzas->total = $request->total;
        $finanzas->created_at = $request->created_at;
        $finanzas->updated_at = $request->updated_at;
        $finanzas->save();
        return response()->json(['message' => 'Finanzas created successfully'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $finanzas = Finanzas::find($id);
        if ($finanzas) {
            return $finanzas;
        } else {
            return response()->json(['message' => 'Finanzas not found'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Finanzas $finanzas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $finanzas = Finanzas::find($id);
        if ($finanzas) {
            $finanzas = new Finanzas();
            $finanzas->date = $request->date;
            $finanzas->id_cliente = $request->id_cliente;
            $finanzas->id_proveedor = $request->id_proveedor;
            $finanzas->concept = $request->concept;
            $finanzas->description = $request->description;
            $finanzas->amount = $request->amount;
            $finanzas->status = $request->status;
            $finanzas->img = $request->img;
            $finanzas->id_user_created = $request->id_user_created;
            $finanzas->id_user_updated = $request->id_user_updated;
            $finanzas->id_user_assigned = $request->id_user_assigned;
            $finanzas->id_supervisor_assigned = $request->id_supervisor_assigned;
            $finanzas->total = $request->total;
            $finanzas->created_at = $request->created_at;
            $finanzas->updated_at = $request->updated_at;
            $finanzas->save();
            return response()->json(['message' => 'Finanzas updated successfully'], 200);
        } else {
            return response()->json(['message' => 'Finanzas not found'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $finanzas = Finanzas::find($id);
        if ($finanzas) {
            $finanzas->delete();
            return response()->json(['message' => 'Finanzas deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Finanzas not found'], 404);
        }
    }
}

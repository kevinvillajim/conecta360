<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Cita::all();
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
        $cita = new Cita();
        $cita->date_taken = $request->date_taken;
        $cita->date_cita = $request->date_cita;
        $cita->description = $request->description;
        $cita->id_cliente = $request->id_cliente;
        $cita->id_user_assigned = $request->id_user_assigned;
        $cita->id_user_created = $request->id_user_created;
        $cita->id_user_updated = $request->id_user_updated;
        $cita->id_supervisor_updated = $request->id_supervisor_updated;
        $cita->created_at = $request->created_at;
        $cita->updated_at = $request->updated_at;
        $cita->save();
        return response()->json(['message' => 'Cita created successfully'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cita = Cita::find($id);
        if ($cita) {
            return $cita;
        } else {
            return response()->json(['message' => 'Cita not found'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cita = Cita::find($id);
        if ($cita) {
            $cita = new Cita();
            $cita->date_taken = $request->date_taken;
            $cita->date_cita = $request->date_cita;
            $cita->description = $request->description;
            $cita->id_cliente = $request->id_cliente;
            $cita->id_user_assigned = $request->id_user_assigned;
            $cita->id_user_created = $request->id_user_created;
            $cita->id_user_updated = $request->id_user_updated;
            $cita->id_supervisor_assigned = $request->id_supervisor_assigned;
            $cita->created_at = $request->created_at;
            $cita->updated_at = $request->updated_at;
            $cita->save();
            return response()->json(['message' => 'Cita updated successfully'], 200);
        } else {
            return response()->json(['message' => 'Cita not found'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cita = Cita::find($id);
        if ($cita) {
            $cita->delete();
            return response()->json(['message' => 'Cita deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Cita not found'], 404);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Cliente::all();
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
        $cliente = new Cliente();
        $cliente->name = $request->name;
        $cliente->email = $request->email;
        $cliente->phone = $request->phone;
        $cliente->address = $request->address;
        $cliente->city = $request->city;
        $cliente->state = $request->state;
        $cliente->country = $request->country;
        $cliente->birth = $request->birth;
        $cliente->gender = $request->gender;
        $cliente->join = $request->join;
        $cliente->status = $request->status;
        $cliente->type = $request->type;
        $cliente->id_user_created = $request->id_user_created;
        $cliente->id_user_updated = $request->id_user_updated;
        $cliente->id_usuario_assigned = $request->id_usuario_assigned;
        $cliente->created_at = $request->created_at;
        $cliente->updated_at = $request->updated_at;
        $cliente->save();
        return response()->json(['message' => 'Cliente created successfully'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);
        if ($cliente) {
            return $cliente;
        } else {
            return response()->json(['message' => 'Cliente not found'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        if ($cliente) {
            $cliente = new Cliente();
            $cliente->name = $request->name;
            $cliente->email = $request->email;
            $cliente->phone = $request->phone;
            $cliente->address = $request->address;
            $cliente->city = $request->city;
            $cliente->state = $request->state;
            $cliente->country = $request->country;
            $cliente->birth = $request->birth;
            $cliente->gender = $request->gender;
            $cliente->join = $request->join;
            $cliente->status = $request->status;
            $cliente->type = $request->type;
            $cliente->id_user_created = $request->id_user_created;
            $cliente->id_user_updated = $request->id_user_updated;
            $cliente->id_user_assigned = $request->id_user_assigned;
            $cliente->id_supervisor_assigned = $request->id_supervisor_assigned;
            $cliente->created_at = $request->created_at;
            $cliente->updated_at = $request->updated_at;
            $cliente->save();
            return response()->json(['message' => 'Cliente updated successfully'], 200);
        } else {
            return response()->json(['message' => 'Cliente not found'], 404);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        if ($cliente) {
            $cliente->delete();
            return response()->json(['message' => 'Cliente deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Cliente not found'], 404);
        }
    }
}
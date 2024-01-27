<?php

namespace App\Http\Controllers;

use App\Models\Proformalist;
use Illuminate\Http\Request;

class ProformalistController extends Controller
{
    public function index()
    {
        return Proformalist::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $proformalist = new Proformalist();
        $proformalist->id_proformas = $request->id_proformas;
        $proformalist->id_cliente = $request->id_cliente;
        $proformalist->id_usuario = $request->id_usuario;
        $proformalist->status = $request->status;
        $proformalist->price = $request->price;
        $proformalist->created_at = $request->created_at;
        $proformalist->updated_at = $request->updated_at;
        $proformalist->save();
        return response()->json(['message' => 'Proformalist created successfully'], 200);
    }

    public function show($id)
    {
        $proformalist = Proformalist::find($id);
        if ($proformalist) {
            return $proformalist;
        } else {
            return response()->json(['message' => 'Proformalist not found'], 404);
        }
    }

    public function edit(Proformalist $proformalist)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $proformalist = Proformalist::find($id);
        if ($proformalist) {
            $proformalist->id_proformas = $request->id_proformas;
            $proformalist->id_cliente = $request->id_cliente;
            $proformalist->id_usuario = $request->id_usuario;
            $proformalist->status = $request->status;
            $proformalist->price = $request->price;
            $proformalist->created_at = $request->created_at;
            $proformalist->updated_at = $request->updated_at;
            $proformalist->save();
            return response()->json(['message' => 'Proformalist updated successfully'], 200);
        } else {
            return response()->json(['message' => 'Proformalist not found'], 404);
        }
    }

    public function destroy($id)
    {
        $proformalist = Proformalist::find($id);
        if ($proformalist) {
            $proformalist->delete();
            return response()->json(['message' => 'Proformalist deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Proformalist not found'], 404);
        }
    }
}

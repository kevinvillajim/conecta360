<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index()
    {
        return Proveedor::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $proveedor = new Proveedor();
        $proveedor->name = $request->name;
        $proveedor->logo = $request->logo;
        $proveedor->phone1 = $request->phone1;
        $proveedor->phone2 = $request->phone2;
        $proveedor->address = $request->address;
        $proveedor->web = $request->web;
        $proveedor->asesor = $request->asesor;
        $proveedor->id_user_created = $request->id_user_created;
        $proveedor->id_user_updated = $request->id_user_updated;
        $proveedor->created_at = $request->created_at;
        $proveedor->updated_at = $request->updated_at;
        $proveedor->save();
        return response()->json(['message' => 'Proveedor created successfully'], 200);
    }

    public function show($id)
    {
        $proveedor = Proveedor::find($id);
        if ($proveedor) {
            return $proveedor;
        } else {
            return response()->json(['message' => 'Proveedor not found'], 404);
        }
    }

    public function edit(Proveedor $proveedor)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $proveedor = Proveedor::find($id);
        if ($proveedor) {
            $proveedor->name = $request->name;
            $proveedor->logo = $request->logo;
            $proveedor->phone1 = $request->phone1;
            $proveedor->phone2 = $request->phone2;
            $proveedor->address = $request->address;
            $proveedor->web = $request->web;
            $proveedor->asesor = $request->asesor;
            $proveedor->id_user_created = $request->id_user_created;
            $proveedor->id_user_updated = $request->id_user_updated;
            $proveedor->created_at = $request->created_at;
            $proveedor->updated_at = $request->updated_at;
            $proveedor->save();
            return response()->json(['message' => 'Proveedor updated successfully'], 200);
        } else {
            return response()->json(['message' => 'Proveedor not found'], 404);
        }
    }

    public function destroy($id)
    {
        $proveedor = Proveedor::find($id);
        if ($proveedor) {
            $proveedor->delete();
            return response()->json(['message' => 'Proveedor deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Proveedor not found'], 404);
        }
    }
}

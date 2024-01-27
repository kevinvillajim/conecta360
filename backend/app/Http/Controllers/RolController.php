<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function index()
    {
        return Rol::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $rol = new Rol();
        $rol->rol = $request->rol;
        $rol->description = $request->description;
        $rol->status = $request->status;
        $rol->id_user_created = $request->id_user_created;
        $rol->id_user_updated = $request->id_user_updated;
        $rol->created_at = $request->created_at;
        $rol->updated_at = $request->updated_at;
        $rol->save();
        return response()->json(['message' => 'Rol created successfully'], 200);
    }

    public function show($id)
    {
        $rol = Rol::find($id);
        if ($rol) {
            return $rol;
        } else {
            return response()->json(['message' => 'Rol not found'], 404);
        }
    }

    public function edit(Rol $rol)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $rol = Rol::find($id);
        if ($rol) {
            $rol->rol = $request->rol;
            $rol->description = $request->description;
            $rol->status = $request->status;
            $rol->id_user_created = $request->id_user_created;
            $rol->id_user_updated = $request->id_user_updated;
            $rol->created_at = $request->created_at;
            $rol->updated_at = $request->updated_at;
            $rol->save();
            return response()->json(['message' => 'Rol updated successfully'], 200);
        } else {
            return response()->json(['message' => 'Rol not found'], 404);
        }
    }

    public function destroy($id)
    {
        $rol = Rol::find($id);
        if ($rol) {
            $rol->delete();
            return response()->json(['message' => 'Rol deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Rol not found'], 404);
        }
    }
}

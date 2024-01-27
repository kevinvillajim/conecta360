<?php

namespace App\Http\Controllers;

use App\Models\Proforma;
use Illuminate\Http\Request;

class ProformaController extends Controller
{
    public function index()
    {
        return Proforma::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $proforma = new Proforma();
        $proforma->name = $request->name;
        $proforma->date = $request->date;
        $proforma->valid_days = $request->valid_days;
        $proforma->id_clientes = $request->id_clientes;
        $proforma->id_productos = $request->id_productos;
        $proforma->id_user_assigned = $request->id_user_assigned;
        $proforma->id_supervisor_assigned = $request->id_supervisor_assigned;
        $proforma->status = $request->status;
        $proforma->observation = $request->observation;
        $proforma->created_at = $request->created_at;
        $proforma->updated_at = $request->updated_at;
        $proforma->save();
        return response()->json(['message' => 'Proforma created successfully'], 200);
    }

    public function show($id)
    {
        $proforma = Proforma::find($id);
        if ($proforma) {
            return $proforma;
        } else {
            return response()->json(['message' => 'Proforma not found'], 404);
        }
    }

    public function edit(Proforma $proforma)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $proforma = Proforma::find($id);
        if ($proforma) {
            $proforma->name = $request->name;
            $proforma->date = $request->date;
            $proforma->valid_days = $request->valid_days;
            $proforma->id_clientes = $request->id_clientes;
            $proforma->id_productos = $request->id_productos;
            $proforma->id_user_assigned = $request->id_user_assigned;
            $proforma->id_supervisor_assigned = $request->id_supervisor_assigned;
            $proforma->status = $request->status;
            $proforma->observation = $request->observation;
            $proforma->created_at = $request->created_at;
            $proforma->updated_at = $request->updated_at;
            $proforma->save();
            return response()->json(['message' => 'Proforma updated successfully'], 200);
        } else {
            return response()->json(['message' => 'Proforma not found'], 404);
        }
    }

    public function destroy($id)
    {
        $proforma = Proforma::find($id);
        if ($proforma) {
            $proforma->delete();
            return response()->json(['message' => 'Proforma deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Proforma not found'], 404);
        }
    }
}

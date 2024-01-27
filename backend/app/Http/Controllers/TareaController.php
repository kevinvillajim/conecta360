<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function index()
    {
        return Tarea::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $tarea = new Tarea();
        $tarea->date_create = $request->date_create;
        $tarea->date_update = $request->date_update;
        $tarea->title = $request->title;
        $tarea->description = $request->description;
        $tarea->done = $request->done;
        $tarea->id_user_assigned = $request->id_user_assigned;
        $tarea->id_user_created = $request->id_user_created;
        $tarea->id_user_updated = $request->id_user_updated;
        $tarea->created_at = $request->created_at;
        $tarea->updated_at = $request->updated_at;
        $tarea->save();
        return response()->json(['message' => 'Tarea created successfully'], 200);
    }

    public function show($id)
    {
        $tarea = Tarea::find($id);
        if ($tarea) {
            return $tarea;
        } else {
            return response()->json(['message' => 'Tarea not found'], 404);
        }
    }

    public function edit(Tarea $tarea)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $tarea = Tarea::find($id);
        if ($tarea) {
            $tarea->date_create = $request->date_create;
            $tarea->date_update = $request->date_update;
            $tarea->title = $request->title;
            $tarea->description = $request->description;
            $tarea->done = $request->done;
            $tarea->id_user_assigned = $request->id_user_assigned;
            $tarea->id_user_created = $request->id_user_created;
            $tarea->id_user_updated = $request->id_user_updated;
            $tarea->created_at = $request->created_at;
            $tarea->updated_at = $request->updated_at;
            $tarea->save();
            return response()->json(['message' => 'Tarea updated successfully'], 200);
        } else {
            return response()->json(['message' => 'Tarea not found'], 404);
        }
    }

    public function destroy($id)
    {
        $tarea = Tarea::find($id);
        if ($tarea) {
            $tarea->delete();
            return response()->json(['message' => 'Tarea deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Tarea not found'], 404);
        }
    }
}

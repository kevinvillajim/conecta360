<?php

namespace App\Http\Controllers;

use App\Models\Meta;
use Illuminate\Http\Request;

class MetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Meta::all();
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
        $meta = new Meta();
        $meta->name = $request->name;
        $meta->value = $request->value;
        $meta->type = $request->type;
        $meta->description = $request->description;
        $meta->id_user_assigned = $request->id_user_assigned;
        $meta->id_supervisor_assigned = $request->id_supervisor_assigned;
        $meta->created_at = $request->created_at;
        $meta->updated_at = $request->updated_at;
        $meta->save();
        return response()->json(['message' => 'Meta created sucessfully'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $meta = Meta::find($id);
        if ($meta) {
            return $meta;
        } else {
            return response()->json(['message' => 'Meta not found'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Meta $meta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $meta = Meta::find($id);
        if ($meta) {
            $meta->name = $request->name;
            $meta->value = $request->value;
            $meta->type = $request->type;
            $meta->description = $request->description;
            $meta->id_user_assigned = $request->id_user_assigned;
            $meta->id_supervisor_assigned = $request->id_supervisor_assigned;
            $meta->created_at = $request->created_at;
            $meta->updated_at = $request->updated_at;
            $meta->save();
            return response()->json(['message' => 'Meta updated sucessfully'], 200);
        } else {
            return response()->json(['message' => 'Meta not found'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $meta = Meta::find($id);
        if ($meta) {
            $meta->delete();
            return response()->json(['message' => 'Meta deleted sucessfully'], 200);
        } else {
            return response()->json(['message' => 'Meta not found'], 404);
        }
    }
}

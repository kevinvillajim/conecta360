<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        return Team::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $team = new Team();
        $team->name = $request->name;
        $team->id_user_leader = $request->id_user_leader;
        $team->id_user_asigned = $request->id_user_asigned;
        $team->status = $request->status;
        $team->created_at = $request->created_at;
        $team->updated_at = $request->updated_at;
        $team->save();
        return response()->json(['message' => 'Team created successfully'], 200);
    }

    public function show($id)
    {
        $team = Team::find($id);
        if ($team) {
            return $team;
        } else {
            return response()->json(['message' => 'Team not found'], 404);
        }
    }

    public function edit(Team $team)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $team = Team::find($id);
        if ($team) {
            $team->name = $request->name;
            $team->id_user_leader = $request->id_user_leader;
            $team->id_user_asigned = $request->id_user_asigned;
            $team->status = $request->status;
            $team->created_at = $request->created_at;
            $team->updated_at = $request->updated_at;
            $team->save();
            return response()->json(['message' => 'Team updated successfully'], 200);
        } else {
            return response()->json(['message' => 'Team not found'], 404);
        }
    }

    public function destroy($id)
    {
        $team = Team::find($id);
        if ($team) {
            $team->delete();
            return response()->json(['message' => 'Team deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Team not found'], 404);
        }
    }
}

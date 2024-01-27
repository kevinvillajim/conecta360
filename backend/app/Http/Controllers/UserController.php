<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all();
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
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->email_verified_at = $request->email_verified_at;
        $user->password = $request->password;
        $user->id_rol = $request->id_rol;
        $user->status = $request->status;
        $user->avatar = $request->avatar;
        $user->phone = $request->phone;
        $user->ci = $request->ci;
        $user->id_user_created = $request->id_user_created;
        $user->id_user_updated = $request->id_user_updated;
        $user->remember_token = $request->remember_token;
        $user->created_at = now();
        $user->updated_at = now();
        $user->save();

        return response()->json(['message' => 'User created successfully'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::find($id);

        if ($user) {
            return $user;
        } else {
            return response()->json(['message' => 'User not found'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if ($user) {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->email_verified_at = $request->email_verified_at;
            $user->password = $request->password;
            $user->id_rol = $request->id_rol;
            $user->status = $request->status;
            $user->avatar = $request->avatar;
            $user->phone = $request->phone;
            $user->ci = $request->ci;
            $user->id_user_created = $request->id_user_created;
            $user->id_user_updated = $request->id_user_updated;
            $user->remember_token = $request->remember_token;
            $user->updated_at = now();
            $user->save();

            return response()->json(['message' => 'User updated successfully'], 200);
        } else {
            return response()->json(['message' => 'User not found'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return response()->json(['message' => 'User deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'User not found'], 404);
        }
    }
}

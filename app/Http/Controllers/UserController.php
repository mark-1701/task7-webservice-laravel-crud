<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $data = UserResource::collection(User::all());
        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => 'usuarios consultados exitosamente',
        ], 200);
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
    public function store(Request $request): JsonResponse
    {
        $data = User::create($request->all());
        $data = new UserResource($data);
        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => 'usuario creado exitosamente',
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = User::find($id);
        $data = new UserResource($data);
        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => 'usuario consultado exitosamente',
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $data = User::find($id);
        $data->update($request->all());
        $data = new UserResource($data);
        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => 'usuario actualiado exitosamente',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();
        return response()->json([
            'success' => true,
            'data' => null,
            'message' => 'usuario eliminado exitosamente',
        ], 200);
    }
}

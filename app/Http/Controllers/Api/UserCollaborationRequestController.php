<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserCollaborationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCollaborationRequestController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $requests = UserCollaborationRequest::with(['user.profile', 'user:id,name', 'collaborationProposal'])->whereHas('collaborationProposal', function ($query) use ($user) {
            $query->where('user_id', '!=', $user->id); // Filtra para obtener solo solicitudes de colaboración donde el creador no es el usuario autenticado
        })->get();

        return response()->json(['data' => $requests], 200);
    }


    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $request = UserCollaborationRequest::findOrFail($id);

        if ($request->user_id !== $user->id) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $validatedData = $request->validate([
            'status' => 'required|in:pending,accepted,rejected',
        ]);

        $request->update($validatedData);

        return response()->json([
            'data' => $request,
            'success' => true,
            'message' => 'User collaboration request updated successfully'
        ], 200);
    }


    public function show(string $id)
    {
        $user = Auth::user();
        $request = UserCollaborationRequest::findOrFail($id);

        if ($request->user_id !== $user->id) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return response()->json(['data' => $request], 200);
    }



    public function destroy(string $id)
    {
        //
    }
}

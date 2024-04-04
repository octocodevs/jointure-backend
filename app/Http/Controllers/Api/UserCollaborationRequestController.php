<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CollaborationParticipation;
use App\Models\CollaborationProposal;
use App\Models\UserCollaborationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCollaborationRequestController extends Controller
{
    public function index()
    {
        $user = Auth::user();
    // Obtener las solicitudes de colaboración asociadas a las colaboraciones creadas por el usuario
        $collaborationProposals = CollaborationProposal::where('user_id', $user->id)->get();
        // Obtener todas las solicitudes de colaboración asociadas a las colaboraciones del usuario
        $userCollaborationRequests = UserCollaborationRequest::whereIn('collaboration_proposal_id', $collaborationProposals->pluck('id'))
        ->with('user')
        ->get();

        return response()->json(['data' => $userCollaborationRequests], 200);
    }


    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $requestStatus = $request->status;

        // Verificar si el usuario tiene permiso para actualizar el estado
        $userCollaborationRequest = UserCollaborationRequest::findOrFail($id);
        $collaborationProposal = CollaborationProposal::findOrFail($userCollaborationRequest->collaboration_proposal_id);

        // Verificar si el usuario actual es el creador de la colaboración asociada a la solicitud
        if ($collaborationProposal->user_id !== $user->id) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Actualizar el estado de la solicitud de colaboración
        $userCollaborationRequest->update(['status' => $requestStatus]);

        // Si deseas, también puedes actualizar el estado en la participación correspondiente
        $collaborationParticipation = CollaborationParticipation::where('collaboration_id', $collaborationProposal->id)
            ->where('user_id', $userCollaborationRequest->user_id)
            ->first();
        $collaborationParticipation->update(['status' => $requestStatus]);

        return response()->json([
            'data'=>$collaborationParticipation,
            'success' => true,
            'message' => 'Estado de la solicitud actualizado correctamente'], 200);
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

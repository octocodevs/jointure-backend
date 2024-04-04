<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CollaborationParticipation;
use App\Models\CollaborationProposal;
use App\Models\UserCollaborationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CollaborationParticipantionController extends Controller
{

    //muestra las colab. a las que me he unido, sin importar el status
    //mestra las participaciones
    public function index()
    {
        $user = Auth::user();
        $participants = CollaborationParticipation::with('collaborationProposal')->where('user_id', $user->id)->get();
        return response()->json(['data' => $participants], 200);
    }


    //Permite que el usuario se UNA a una collab_ID
    public function joinCollaboration($collaborationId)
    {
        if (!Auth::check()) {
            return response()->json(['message' => 'Usuario no autenticado'], 401);
        }

        $user = Auth::user();
        $collaboration = CollaborationProposal::find($collaborationId);

        // Verificar si la colaboración existe
        if (!$collaboration) {
            return response()->json(['message' => 'Colaboración no encontrada'], 404);
        }

        // Verificar si el usuario ya está unido a esta colaboración
        $participant = CollaborationParticipation::where('user_id', $user->id)
            ->where('collaboration_id', $collaborationId)
            ->first();

        if ($participant) {
            return response()->json(['message' => 'Ya estás unido a esta colaboración'], 400);
        }

        // Crear la participación del usuario en la colaboración
        $collab_partic =  CollaborationParticipation::create([
            'user_id' => $user->id,
            'collaboration_id' => $collaborationId,
        ]);

        // Crear la solicitud de colaboración para el usuario propietario de la colaboración
        UserCollaborationRequest::create([
            'user_id' => $user->id,
            'collaboration_proposal_id' => $collaborationId,
            'status' => 'pending',
        ]);

        return response()->json([
            'data' => $collab_partic,
            'success' => true,
            'message' => 'Te has unido a la colaboración correctamente'
        ], 200);
    }


    //deshacer una participacion, o darse de baja
    public function leaveCollaboration($collaborationId)
    {
        $user = Auth::user();
        $participant = CollaborationParticipation::where('user_id', $user->id)
            ->where('collaboration_id', $collaborationId)
            ->first();

        if (!$participant) {
            return response()->json(['message' => 'No estás unido a esta colaboración'], 400);
        }
        UserCollaborationRequest::where('user_id', $user->id)
        ->where('collaboration_proposal_id', $collaborationId)
        ->delete();


        $participant->delete();

        return response()->json(['message' => 'Has salido de la colaboración correctamente'], 200);
    }


    //filtra las participaciones del usuario POR STATUS =  pending - accept - rechazao
    public function filterByStatus($status)
    {
        $user = Auth::user();
        $participants = CollaborationParticipation::where('user_id', $user->id)
            ->where('status', $status)
            ->get();
        return response()->json(['data' => $participants], 200);
    }


    //actualizar el estado de la solicitud de participacion
    public function update(Request $request, string $id)
    {
        if (!Auth::check()) {
            return response()->json(['message' => 'No estás autenticado'], 401);
        }

        $participant = CollaborationParticipation::findOrFail($id);
        if (!$participant) {
            return response()->json(['error' => 'Collaboration participant not found'], 404);
        }

        $collaboration = $participant->collaborationProposal;

        if ($collaboration->user_id !== Auth::user()->id) {
            return response()->json(['message' => 'No tienes permiso para actualizar este registro'], 403);
        }

        $validator = Validator::make($request->all(), CollaborationParticipation::$rulesStatus);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $participant->update(['status' => $request->status]);

        return response()->json([
            'data' => $participant,
            'success' => true,
            'message' => 'Estado de participación actualizado correctamente'
        ], 200);
    }
}

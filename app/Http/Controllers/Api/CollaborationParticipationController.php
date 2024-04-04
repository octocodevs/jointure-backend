<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CollaborationParticipation;
use App\Models\CollaborationProposal;
use App\Models\UserCollaborationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CollaborationParticipationController extends Controller
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
            return response()->json(['message' => 'Unauthorized user'], 401);
        }

        $user = Auth::user();
        $collaboration = CollaborationProposal::find($collaborationId);

        if (!$collaboration) {
            return response()->json(['message' => 'Collaboration not found'], 404);
        }

        $participant = CollaborationParticipation::where('user_id', $user->id)
            ->where('collaboration_id', $collaborationId)
            ->first();

        if ($participant) {
            return response()->json(['message' => 'You already joined this collaboration'], 400);
        }

        $collab_partic =  CollaborationParticipation::create([
            'user_id' => $user->id,
            'collaboration_id' => $collaborationId,
        ]);

        // enviar la solicitud de colaboración para el usuario-creador de la propuesta de colaboración
        UserCollaborationRequest::create([
            'user_id' => $user->id,
            'collaboration_proposal_id' => $collaborationId,
            'status' => 'pending',
        ]);

        return response()->json([
            'data' => $collab_partic,
            'success' => true,
            'message' => 'You have successfully joined this collaboration'
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
            return response()->json(['message' => 'You have not joined this collaboration'], 400);
        }
        UserCollaborationRequest::where('user_id', $user->id)
        ->where('collaboration_proposal_id', $collaborationId)
        ->delete();


        $participant->delete();

        return response()->json(['message' => 'You have successfully left this collaboration'], 200);
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



}

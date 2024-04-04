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

        $collaborationProposals = CollaborationProposal::where('user_id', $user->id)->get();

        $userCollaborationRequests = UserCollaborationRequest::whereIn('collaboration_proposal_id', $collaborationProposals->pluck('id'))
        ->with('user')
        ->get();

        return response()->json(['data' => $userCollaborationRequests], 200);
    }


    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $requestStatus = $request->status;


        $userCollaborationRequest = UserCollaborationRequest::findOrFail($id);

        $collaborationProposal = CollaborationProposal::findOrFail($userCollaborationRequest->collaboration_proposal_id);
        if ($collaborationProposal->user_id !== $user->id) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $userCollaborationRequest->update(['status' => $requestStatus]);

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

}

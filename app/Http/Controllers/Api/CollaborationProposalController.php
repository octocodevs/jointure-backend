<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CollaborationParticipation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\CollaborationProposal;
use App\Models\UserCollaborationRequest;
use Illuminate\Support\Facades\Storage;

class CollaborationProposalController extends Controller
{

    public function index()
    {
        $proposals = CollaborationProposal::with('user.profile')->get();
        return response()->json(['data' => $proposals], 200);
    }


    public function store(Request $request)
    {
        $user = $request->user();
        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }


        $requestData = $request->all();
        $requestData['user_id'] = $user->id;

        $validator = Validator::make($requestData, CollaborationProposal::$rulesCollaboration);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('collaboration_images');
            $requestData['image'] = $imagePath;
        }

        $collaborationProposal = CollaborationProposal::create($requestData);

        return response()->json([
            'data' => $collaborationProposal,
            'success' => true,
            'message' => 'Collaboration Proposal created successfully'
        ], 201);
    }


    public function show(string $id)
    {
        $collaborationProposal = CollaborationProposal::with('user.profile')->find($id);

        if (!$collaborationProposal) {
            return response()->json(['error' => 'Collaboration proposal not found'], 404);
        }

        return response()->json(['data' => $collaborationProposal], 200);
    }


    public function update(Request $request, string $id)
    {
        $user = $request->user();
        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $collaborationProposal = CollaborationProposal::find($id);
        if (!$collaborationProposal) {
            return response()->json(['error' => 'Collaboration proposal not found'], 404);
        }

        if ($user->id !== $collaborationProposal->user_id) {
            return response()->json(['error' => 'User unauthorized'], 401);
        }

        $requestData = $request->all();
        $requestData['user_id'] = $user->id;

        $validator = Validator::make($requestData, CollaborationProposal::$rulesCollaboration);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('collaboration_images');
            $requestData['image'] = $imagePath;

            if ($collaborationProposal->image) {
                Storage::delete($collaborationProposal->image);
            }
        }

        $collaborationProposal->update($requestData);

        return response()->json([
            'data' => $collaborationProposal,
            'success' => true,
            'message' => 'Collaboration Proposal updated successfully'
        ], 200);
    }


    public function destroy(Request $request, string $id)
    {
        $user = $request->user();
        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $collaborationProposal = CollaborationProposal::find($id);

        if (!$collaborationProposal) {
            return response()->json(['error' => 'Collaboration proposal not found'], 404);
        }

        if ($user->id !== $collaborationProposal->user_id) {
            return response()->json(['error' => 'User unauthorized'], 401);
        }

        $collaborationProposal->delete();

        return response()->json([
            'success' => true,
            'message' => 'Collaboration Proposal deleted successfully'
        ], 200);
    }

    //usuario creador de popuesta de colab. visualice sus colaboraciones creadas:
    public function getMyCollaborationProposals(Request $request)
    {
        $user = $request->user();
        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $myProposals = CollaborationProposal::where('user_id', $user->id)
            ->get();

        return response()->json(['data' => $myProposals], 200);
    }


    public function collaborationWithParticipants()
    {
        $collaborations = CollaborationParticipation::where('status', 'accepted')
            ->with('collaborationProposal')
            ->get();

        if ($collaborations->isEmpty()) {
            return response()->json(['data' => []], 200);
        }

        return response()->json(['data' => $collaborations], 200);
    }

    // Controlador CollaborationProposalController
    // public function handleCollaborationRequest(Request $request, $collaborationId, $requestId, $status)
    // {
    //     $user = $request->user();
    //     $collaborationProposal = CollaborationProposal::findOrFail($collaborationId);

    //     // Verificar si el usuario actual es el creador de la propuesta
    //     if ($user->id !== $collaborationProposal->user_id) {
    //         return response()->json(['error' => 'Unauthorized'], 401);
    //     }

    //     $userCollaborationRequest = UserCollaborationRequest::findOrFail($requestId);
    //     $userCollaborationRequest->update(['status' => $status]);

    //     // Si se acepta la solicitud, se crea una entrada en CollaborationParticipation
    //     if ($status === 'accepted') {
    //         CollaborationParticipation::create([
    //             'user_id' => $userCollaborationRequest->user_id,
    //             'collaboration_id' => $collaborationId,
    //             'status' => 'accepted', // O cualquier otro estado predeterminado
    //         ]);
    //     }

    //     return response()->json(['message' => 'Request status updated successfully'], 200);
    // }
}

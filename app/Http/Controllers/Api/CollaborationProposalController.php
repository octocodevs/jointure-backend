<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\CollaborationProposal;
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
}

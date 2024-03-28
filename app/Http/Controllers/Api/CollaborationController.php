<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use app\Models\Collaboration;

class CollaborationController extends Controller
{
    public function store(Request $request)
    {
        $user = $request->user();
        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        $rules = Collaboration::getRules($user->collaborationTypes, $user->categories);
        $messages = Collaboration::getMessages();
        
        
        $validatedData = $request->validate($rules, $messages);
        $collaboration = new Collaboration();
}
    }
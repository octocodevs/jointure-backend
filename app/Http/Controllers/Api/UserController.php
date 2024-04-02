<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    public function store(Request $request)
    {
        //
        // $request->validate(User::$rules);
    }


    public function show(string $id)
    {

    }


    public function update(Request $request)
    {
        try {
            $user = auth()->user();

            if(!$user){
                return response()->json(['message' => 'Unauthorized'], 401);
            }
            
            $request->validate([
                'name' => 'required|string|max:255',
                'password' => 'nullable|string|min:8|confirmed',
                'position' => 'required|string|max:255',
                'profile_type' => 'required|in:agencia,freelance,empresa',
                'country' => 'nullable|string|max:255',
                'business_name' => 'required|string|max:255',
                'subscription_type' => 'nullable|in:basic,professional,business',

            ]);

            $userData = $request->except(['email']);


            if ($request->filled('password')) {
                $userData['password'] = Hash::make($request->password);
            }

            $user->update($userData);

            return response()->json([
                'datos' => $user,
                'success' => true,
                'message' => 'User updated successfully'
            ], 200);
        } catch (\Exception $e) {

            return response()->json([
                'success' => false,
                'message' => 'An error occurred while updating user data',
                'error' => $e->getMessage()
            ], 500);
        }
    }



    public function destroy(string $id)
    {

    }
}

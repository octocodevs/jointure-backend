<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
// use Illuminate\Support\Str;


class AuthController extends Controller
{

    public function register(Request $request): JsonResponse
    {
        try {
            $request->validate(User::$rules);
            $user = User::create([
                // 'id' => Str::uuid(),
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make ($request->input('password')),
                'position' => $request->input('position'),
                'profile_type' => $request->input('profile_type'),
                'country' => $request->input('country'),
                'business_name' => $request->input('business_name'),
                'subscription_type' => $request->input('subscription_type'),
            ]);


            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json(['user' =>$user, 'access_token'=> $token, 'success' =>true,'message' => 'User registered successfully'], 201);
        } catch (ValidationException $e) {
            return response()->json(['message' => 'Validation failed', 'errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to register user', 'error' => $e->getMessage()], 500);
        }
    }

    public function login(Request $request): JsonResponse
    {
        $request->validate(['email'=>'required|email','password'=>'required']);
        $user = User::where('email',$request-> email)->first();

        if(!$user){
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        if(Auth::attempt($request->only('email','password'))){
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json(['user' =>$user, 'access_token'=> $token, 'success' =>true,'message' => 'User logged in successfully'], 201);
        }
        return response()->json(['message' => 'Validation failed - email or password incorrect'] ,403);
    }

    public function logout(Request $request): JsonResponse
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Session closed successfully.'
        ], 201);
    }
}



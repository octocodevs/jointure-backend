<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{

    public function show(Request $request)
    {
        // $user = $request->user();
        // if (!$user) {
        //     return response()->json(['error' => 'Unauthorized'], 401);
        // }
        // $profile = $user->profile()->first();
        // $profile = Profile::all(); // Obtener todos los perfiles disponibles
        $profiles = Profile::with(['user:id,business_name,country'])->get();
        return response()->json($profiles, 200);
    }


    public function getById($user_id)
    {
        $profile = Profile::with(['user:id,business_name,country'])->where('user_id', $user_id)->first();
        if(!$profile){
            return response()->json(['error' => 'Profile not found'], 404);
        }
        return response()->json($profile, 200);
    }


    public function storeOrUpdate(Request $request): JsonResponse
    {
        $user = $request->user();
        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $rules = Profile::$rules;

        try {
            $profileData = $request->only([

                'CIF',
                'legal_structure',
                'phone_number',
                'email_contact',
                'sector',
                'activity',
                'offer',
                'values',
                'business_size',
                'market',
                'clients',
                'sales_channels',
                'description',
                'social_networks_instagram',
                'social_networks_linkedin',
                'social_networks_x',
                'social_networks_facebook',
                'social_networks_tiktok',
                'social_networks_spotify',
                'social_networks_youtube',
                'social_networks_pinterest',
            ]);

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $path = $image->store('profile_images', 'public');
                $profileData['image'] = $path;
            }

            $profile = $user->profile;

            if ($user->profile()->exists()) {

                $user->profile()->update($profileData);
            } else {

                $user->profile()->create($profileData);
            }
            return response()->json(
                [
                    'data' => $profileData,
                    'success' => true,
                    'message' => 'Profile saved/updated successfully'
                ],
                200
            );
        } catch (ValidationException $e) {

            return response()->json(['errors' => $e->errors()], 422);
        }
    }


    public function destroy()
    {
        try {
            $user = auth()->user();
            if (!$user) {
                return response()->json(['message' => 'Unauthorized'], 401);
            }

            $profile = $user->profile;

            if (!$profile) {
                return response()->json(['message' => 'Profile not found'], 404);
            }

            $profile->delete();

            return response()->json(['message' => 'Profile deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: '. $e->getMessage()], 500);
        }
    }
}

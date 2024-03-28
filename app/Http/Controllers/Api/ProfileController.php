<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Http\JsonResponse;

class ProfileController extends Controller
{

    public function show(Request $request)
    {
        // $user = $request->user();
        // if (!$user) {
        //     return response()->json(['error' => 'Unauthorized'], 401);
        // }
        // $profile = $user->profile()->first();
        $profile = Profile::all(); // Obtener todos los perfiles disponibles
        return response()->json($profile, 200);
    }

    public function getById($user_id){
        $profile = Profile::where('user_id',$user_id)->first();
        return response()->json($profile,200);
    }

    public function storeOrUpdate(Request $request):JsonResponse
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
            'sector',
            'activity',
            'offer',
            'values',
            'business_size',
            'market',
            'clients',
            'sales_channels',
            'description',
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
        return response()->json([
            'data' =>$profileData,
            'success' =>true,
            'message' => 'Profile saved/updated successfully'
        ],
            200);
        } catch (ValidationException $e) {
            // Manejar los errores de validación
            return response()->json(['errors' => $e->errors()], 422);
        }
    }


    public function destroy($id)
    {
        try {
            $profile = Profile::findOrFail($id);
    
            if ($profile->user_id !== Auth::id()) {
                return response()->json(['message' => 'No autorizado'], 401);
            }
    
            // Eliminar el perfil
            $profile->delete();
    
            return response()->json(['message' => 'Se ha eliminado el perfil'], 200);
        } catch (\Exception $e) {
        
            return response()->json(['message' => 'Ha ocurrido un error al intentar eliminar el perfil'], 500);
        };
    }
}
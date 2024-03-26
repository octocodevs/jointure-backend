<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
class ProfileController extends Controller
{
    
    public function show(Request $request)
    {
        $user = $request->user();
        $profile = $user->profile()->first();
        return response()->json($profile, 200);
    }
    
    public function storeOrUpdate(Request $request)
    {
        $user = $request->user();
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
        if ($user->profile()->exists()) {
            
            $user->profile()->update($profileData);
        } else {
            
            $user->profile()->create($profileData);
        }
        return response()->json(['message' => 'Profile saved/updated successfully'], 200);
    }
}

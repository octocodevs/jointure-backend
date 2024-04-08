<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Profile;

class ProfileControllerTest extends TestCase
{ use RefreshDatabase;

    public function test_it_returns_profiles_when_calling_show_method()
    {
        $user = User::factory()->create();
        Profile::factory()->create(['user_id' => $user->id]);

        $response = $this->actingAs($user)->json('GET', '/api/profile');

        $response->assertStatus(200)
                 ->assertJsonStructure([
                     [
                        
                        'image',
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
                        'social_network_linkedin',
                        'social_network_instagram',
                        'social_network_x',
                        'social_network_tiktok',
                        'user' => [
                            'id' => $user->id,
                            'business_name' => $user->business_name,
                            'country' => $user->country,
                            ]
                 ]]);
    }
}

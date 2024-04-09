<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class ProfileControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    public function test_storeOrUpdate_function_creates_a_profile()
    {
        $user=User::factory()->create();

        $requiredProfileData = [
        
        'CIF' => 'C456789',
        'legal_structure' => 'Autónomo',
        'phone_number' => '633414243',
        'email_contact' => 'email@me.com',
        'sector' => 'Viajes',
        'business_size' => 'micro empresa',
        'clients' => 'B2B',
        'sales_channels' => 'ambos',
        'description' => 'Esa es una descripción de mi propuesta',
        ];
    
        $response = $this->actingAs($user)
        ->json('POST', '/api/profile',$requiredProfileData) ;
    
        $response->assertStatus(200);
        $this->assertDatabaseHas('profiles',['CIF' => 'C456789',
        'legal_structure' => 'Autónomo',
        'phone_number' => '633414243',
        'email_contact' => 'email@me.com',
        'sector' => 'Viajes',
        'business_size' => 'micro empresa',
        'clients' => 'B2B',
        'sales_channels' => 'ambos',]);
        }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use app\Models\User;
use SebastianBergmann\Type\VoidType;
use Tests\TestCase;

class AuthTest extends TestCase
{   
    use RefreshDatabase;
    use WithFaker;
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_user_can_be_registrated(): void
    {
        $user = [
        'name' => $this ->faker->name,
        'email' => $this->faker->email,
        'password' => "password",
        'password_confirmation' => "password",
        'position' => "Position",
        'profile_type' => "empresa",
        'country' => "Country",
        'business_name' => "Business",
        'subscription_type' => "basic",
    ];
        $response = $this->postJson('/api/register', $user);
        $response->assertStatus(201);
        
    }


    public function test_token_is_created_when_user_registers(): void
    {
        $user = [
        'name' => $this ->faker->name,
        'email' => $this->faker->email,
        'password' => "password",
        'password_confirmation' => "password",
        'position' => "Position",
        'profile_type' => "empresa",
        'country' => "Country",
        'business_name' => "Business",
        'subscription_type' => "basic",
    ];
        
        $response = $this->postJson('/api/register', $user);
        $responseData = $response->json();
        $this->assertArrayHasKey('access_token', $responseData);
    }

    public function test_user_can_login_and_has_a_token():void
    {   
        $userData = [
            'email' => $this->faker->unique()->safeEmail,
            'password' => 'password',
            ];
          
            // crea un usuario con los datos 
            $user = User::create([
                'name' => '',
                'email' => $userData['email'],
                'password' => Hash::make($userData['password']),
                'position' => '',
                'profile_type' => 'empresa',
                'country' => "Country",
                'business_name' => '"Business"',
                'subscription_type' => 'basic'
            ]);
        
            
            $response = $this->postJson('/api/login', $userData);
            $responseData=$response->json();
            $response->assertStatus(200);
            $this->assertArrayHasKey('access_token', $responseData);
        }

    public function test_user_can_logout():void 
    {
        $user = User::factory()->create();

        $token = $user->createToken('auth_token')->plainTextToken;
    
        $response = $this->withHeaders([
        'Authorization' => 'Bearer ' . $token,
        ])->postJson('/api/logout');

        $response->assertStatus(201);

       
        }

        // public function test_token_is_destroyed_when_user_logs_out():void
        // {} 
    }
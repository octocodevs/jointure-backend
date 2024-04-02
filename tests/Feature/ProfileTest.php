<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;
use App\Models\Profile;
use App\Models\User;
use Tests\TestCase;

class ProfileTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    use RefreshDatabase;
    use WithFaker;
    public function test_update_profile(): void
    {
        Storage::fake('public');  // función de Laravel para simular el almacenamiento de archivos

        $user = User::factory()->create(); //fakeamos un user
        $profileData = Profile::factory()->make()->toArray();//fakeamos un profile

        var_dump($profileData);

        $response = $this -> actingAs($user)->json('POST', '/api/profile', $profileData);

        $response -> assertStatus(200);

    }
}

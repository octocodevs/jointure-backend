<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

use App\Models\CollaborationProposal;
use App\Models\CollaborationParticipation;
use App\Models\UserCollaborationRequest;

class CollaborationParticipationControllerTest extends TestCase
{   
    use RefreshDatabase;
    protected function setUp(): void
    {
        parent::setUp();

    }
    public function test_joinCollaboration_allows_user_to_join()
    {
        $user1 = User::factory()->create();   
    
        $collaboration=CollaborationProposal::factory()->create([
            "user_id"=> $user1->id,
        ]);

        $user2 = User::factory()->create();
        $response = $this->actingAs($user2)
            ->json('POST','/api/my-participations/1');

        $response->assertStatus(200)
            ->assertJson([
                'success' => true,
                'message' => 'You have successfully joined this collaboration'
            ]);
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;
use App\Models\User;
use App\Models\CollaborationProposal;

class CollaborationProposalTest extends TestCase
{
    use RefreshDatabase;

    public function test_proposal_belongs_to_a_user()
    {   
        $userData = [
            'name' => 'Name Surname',
            'email' => 'name@example.com',
            'password' => bcrypt('your-password'),
            'position' => 'position',
            'profile_type' =>  'agencia',
            'business_name' => 'Business Name'
        ];
    
        $user = User::create($userData);
    
        $proposal = CollaborationProposal::factory()->create(['user_id' => $user->id]);
    
        $proposalUser = $proposal->user;
    
    
        $this->assertInstanceOf(User::class, $proposalUser);
        $this->assertEquals($user->id, $proposalUser->id);
    }
 
   
    


    public function test_Index()
    {
        CollaborationProposal::factory()->count(5)->create();

        $response = $this->get('/api/collaboration-proposals');

        $response->assertStatus(200)
                 ->assertJsonCount(5, 'data');
    }

   
        public function test_store_creates_collaboration_proposal()
        {
            
            $user = User::factory()->create();
    
            Storage::fake('public');
            $image = UploadedFile::fake()->image('collaboration.jpg');
    
            
            $data = [
                'brand' => 'Mi Marca',
                'title' => 'Propuesta de Colaboración',
                'description' => 'Esta es una descripción de la propuesta de colaboración.',
                'collab_start_date'=> now(),
                'collab_end_date'=>now()->addDays(2),
                'collab_type'=> 'Co-Branding',
                'objectives' => 'objetivos',
                'proposal' => 'propuesta',
                'ad_start_date'=> '2024-07-10',
                'ad_end_date'=> '2024-07-17',

                'image' => $image,
            ];
    
            $response = $this->actingAs($user)
                ->json('POST', '/api/collaboration-proposals', $data);
    
            
            $response->assertStatus(201);
    
            $this->assertDatabaseHas('collaboration_proposals', [
                'brand' => 'Mi Marca',
                'title' => 'Propuesta de Colaboración',
                'description' => 'Esta es una descripción de la propuesta de colaboración.',
                'collab_type'=> 'Co-Branding',
                'objectives' => 'objetivos',
                'proposal' => 'propuesta',
                'ad_start_date'=> '2024-07-10',
                'ad_end_date'=> '2024-07-17',

            ]);
    
            
            Storage::disk('public')->assertExists($response['data']['image']);
        }
    }
    


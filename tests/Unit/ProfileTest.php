<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Profile;
use App\Models\User;

class ProfileTest extends TestCase
{
    use RefreshDatabase;

    public function test_profile_belongs_to_a_user()
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
    
        $profile = Profile::factory()->create(['user_id' => $user->id]);
    
        $profileUser = $profile->user;
    
    
        $this->assertInstanceOf(User::class, $profileUser);
        $this->assertEquals($user->id, $profileUser->id);
    }
    public function test_fields_can_be_filled(): void
    {
        // creamos datos falsos datos
        $profileData = [
            'image' => 'example.jpg',
            'CIF' => '123456789',
            'legal_structure' => 'Sociedad Limitada (S. L.)',
            'sector' => 'Tecnología',
            'activity' => 'Développement de logiciels',
            'offer' => 'Services de développement web',
            'values' => 'Innovation, Qualité, Fiabilité',
            'business_size' => 'micro empresa',
            'market' => 'Nacional',
            'clients' => 'B2B',
            'sales_channel' => '',
            'description' => 'Une entreprise de développement de logiciels innovante et fiable.',
            'social_networks_instagram' => 'https://www.instagram.com/example',
            'social_networks_linkedin' => 'https://www.linkedin.com/example',
            'social_networks_x' => null,
            'social_networks_facebook' => 'https://www.facebook.com/example',
            'social_networks_tiktok' => null,
            'social_networks_spotify' => null,
            'social_networks_youtube' => null,
            'social_networks_pinterest' => null,
        ];

        //creamos un perfil con los datos falsos
       
        $profile = new Profile();
        $profile->fill($profileData);

        foreach ($profileData as $attribute => $value) {
            $this->assertEquals($value, $profile->$attribute);
    }
    }

    public function test_it_validates_required_fields()
    {
        
        $profile = new Profile();

        $validator = validator($profile->toArray(), Profile::$rules);

        $this->assertTrue($validator->fails());

        $this->assertTrue($validator->errors()->has('CIF'));
        $this->assertTrue($validator->errors()->has('legal_structure'));
        $this->assertTrue($validator->errors()->has('sector'));
        $this->assertTrue($validator->errors()->has('business_size'));
        $this->assertTrue($validator->errors()->has('clients'));
    }

    public function test_it_validates_email()
    {       
        $profileData = [
            'email_contact' => 'invalid-email',
        ];

        $validator = validator($profileData, Profile::$rules);

        $this->assertTrue($validator->fails());
        $this->assertTrue($validator->errors()->has('email_contact'));
    }

    public function test_it_validates_phone_number()
    {
        $profileData = [
            'phone_number' => 'invalid-phone-number'
        ];

        $validator = validator($profileData, Profile::$rules);

        $this->assertTrue($validator->fails());
        $this->assertTrue($validator->errors()->has('phone_number'));
    }

}
<?php

namespace Database\Factories;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    protected $model = Profile::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'CIF' => $this->generateCIF(),
            'legal_structure' => $this->faker->randomElement(['Autónomo', 'Comunidad de bienes', 'Sociedad Limitada (S. L.)', 'Sociedad Limitada Laboral (S. L. L.)', 'Sociedad Anónima (S. A.)', 'Sociedad Anónima Laboral (SAL)', 'Sociedad Limitada Nueva Empresa (S. L. N. E.)']),
            'sector' => $this->faker->randomElement(['Alimentación y bebidas', 'Viajes', 'Familia', 'Entretenimiento', 'Belleza', 'Educación', 'Salud', 'Tecnología', 'Música', 'Hogar', 'Horeca', 'Mascotas', 'Deportes', 'Arte y cultura', 'Motor', 'Moda', 'Sin ánimo de lucro', 'Retail', 'Juguetes', 'Mobiliario', 'Servicios profesionales', 'Otros']),
            'activity' => $this->faker->optional()->realText(255), 
            'offer' => $this->faker->optional()->realText(255), 
            'values' => $this->faker->optional()->realText(255), 
            'business_size' => $this->faker->randomElement(['micro empresa', 'pequeña empresa', 'mediana empresa', 'gran empresa']),
            'market' => $this->faker->optional()->randomElement(['Local', 'Comarcal', 'Provincial', 'Autonómico', 'Nacional', 'Internacional']), 
            'clients' => $this->faker->randomElement(['B2B', 'B2C', 'B2B y B2C']),
            'sales_channels' => $this->faker->randomElement(['online', 'offline']),
            'description' => $this->faker->optional()->realText(500), 
        ];
    }

private function generateCIF()
{
    $letter = chr(rand(65, 90));
    $numbers = str_pad(rand(0, 99999999), 8, '0', STR_PAD_LEFT); 
    return $letter . $numbers;
}
}

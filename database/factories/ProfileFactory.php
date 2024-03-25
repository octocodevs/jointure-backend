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
            'user_id' => User::factory()->create()->id,
            'CIF' => $this->faker->realText(10), // Genera un texto aleatorio de longitud 10
            'legal_structure' => $this->faker->randomElement(['Autónomo', 'Comunidad de bienes', 'Sociedad Limitada (S. L.)', 'Sociedad Limitada Laboral (S. L. L.)', 'Sociedad Anónima (S. A.)', 'Sociedad Anónima Laboral (SAL)', 'Sociedad Limitada Nueva Empresa (S. L. N. E.)']),
            'sector' => $this->faker->randomElement(['Alimentación y bebidas', 'Viajes', 'Familia', 'Entretenimiento', 'Belleza', 'Educación', 'Salud', 'Tecnología', 'Música', 'Hogar', 'Horeca', 'Mascotas', 'Deportes', 'Arte y cultura', 'Motor', 'Moda', 'Sin ánimo de lucro', 'Retail', 'Juguetes', 'Mobiliario', 'Servicios profesionales', 'Otros']),
            'activity' => $this->faker->optional()->realText(255), // Campo opcional de texto con longitud máxima de 255
            'offer' => $this->faker->optional()->realText(255), // Campo opcional de texto con longitud máxima de 255
            'values' => $this->faker->optional()->realText(255), // Campo opcional de texto con longitud máxima de 255
            'business_size' => $this->faker->randomElement(['micro empresa', 'pequeña empresa', 'mediana empresa', 'gran empresa']),
            'market' => $this->faker->optional()->randomElement(['Local', 'Comarcal', 'Provincial', 'Autonómico', 'Nacional', 'Internacional']), // Campo opcional que puede tomar un valor aleatorio de la lista proporcionada
            'clients' => $this->faker->randomElement(['B2B', 'B2C']),
            'sales_channels' => $this->faker->randomElement(['online', 'offline']),
            'description' => $this->faker->optional()->realText(500), // Campo opcional de texto con longitud máxima de 500
        ];
    }
}

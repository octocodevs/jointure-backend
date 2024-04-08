<?php

namespace Database\Factories;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Co-Branding' => 'string|in:Experiencia, Personalidad,Oportunidad',
            'Co-Licensing' => 'string|in:Imagen,Producto,Contenido,Operaciones,Tecnología',
            'Co-Supply' => 'string|in:Muestra,Descuento,Cashback',
            'Co-Stand' => 'string|in:Comerciales,Profesionales',
            'Co-Marketing' => 'string|in:Contenido,Promoción,Patrocinio,Testimonio',
            'Co-Event' => 'string|in:Comerciales, Profesionales']),
        ];
    }
}

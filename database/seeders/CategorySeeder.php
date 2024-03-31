<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Co-Branding' => ['Experiencia', 'Personalidad', 'Oportunidad'],
            'Co-Licensing' => ['Imagen', 'Producto', 'Contenido', 'Operaciones', 'Tecnología'],
            'Co-Supply' => ['Muestra', 'Descuento', 'Cashback'], 
            'Co-Stand' => ['Comerciales', 'Profesionales'], 
            'Co-Marketing' => ['Contenido', 'Promoción', 'Patrocinio', 'Testimonio'], 
            'Co-Event' => ['Comerciales', 'Profesionales']
        ];

        foreach ($categories as $categoryName => $subcategories) {
            Category::create(['name' => $categoryName]);
        }
    }
}

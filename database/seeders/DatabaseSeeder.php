<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\CollaborationProposal;
use Database\Seeders\ProposalSeeder;
class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $users = \App\Models\User::factory(5)->create();

        foreach ($users as $user) {
            \App\Models\Profile::factory()->create(['user_id' => $user->id]);
        }

        // $categories = [
        //     'Co-Branding' => ['Experiencia', 'Personalidad', 'Oportunidad'],
        //     'Co-Licensing' => ['Imagen', 'Producto', 'Contenido', 'Operaciones', 'Tecnología'],
        //     'Co-Supply' => ['Muestra', 'Descuento', 'Cashback'], 
        //     'Co-Stand' => ['Comerciales', 'Profesionales'], 
        //     'Co-Marketing' => ['Contenido', 'Promoción', 'Patrocinio', 'Testimonio'], 
        //     'Co-Event' => ['Comerciales', 'Profesionales']
        // ];

        // foreach ($categories as $categoryName => $subcategories) {
        //     $category = Category::create(['name' => $categoryName]);

        //     // foreach ($subcategories as $subcategoryName) {
        //     //     $category->subcategories()->create(['name' => $subcategoryName]);
        //     // }
        // }

        // Crear colaboraciones
        CollaborationProposal::factory(15)->create();

        $this ->call(ProposalSeeder::class);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        
        $user->id = '2';
        $user->name = 'Nadia Barros';
        $user->email = 'nadia@email.com';
        $user->password = '12345678';
        $user->position = 'CEO';
        $user->profile_type = 'empresa';
        $user->country = 'España';
        $user->business_name = 'NATUR';       
        $user->subscription_type = 'basic';

        $user->save();

        $user1 = new User();
        
        $user1->id = '1';
        $user1->name = 'Sofia Sanchez';
        $user1->email = 'sofia@email.com';
        $user1->password = '12345678';
        $user1->position = 'CEO';
        $user1->profile_type = 'empresa';
        $user1->country = 'España';
        $user1->business_name = 'Talent Technology Foundation';       
        $user1->subscription_type = 'basic';

        $user1->save();

        $user2 = new User();
        
        $user2->id = '3';
        $user2->name = 'Pepe Perez';
        $user2->email = 'pepe@email.com';
        $user2->password = '12345678';
        $user2->position = 'CEO';
        $user2->profile_type = 'empresa';
        $user2->country = 'España';
        $user2->business_name = 'PLP Food Promotions';       
        $user2->subscription_type = 'basic';

        $user2->save();

        $user3 = new User();
        
        $user3->id = '4';
        $user3->name = 'Marisol Serrat';
        $user3->email = 'marisol@email.com';
        $user3->password = '12345678';
        $user3->position = 'CEO';
        $user3->profile_type = 'empresa';
        $user3->country = 'España';
        $user3->business_name = 'Marisol Cosmetics';       
        $user3->subscription_type = 'basic';

        $user3->save();

        $user4 = new User();
        
        $user4->id = '5';
        $user4->name = 'Irene Marudo Gomez';
        $user4->email = 'irene@email.com';
        $user4->password = '12345678';
        $user4->position = 'Fundadora';
        $user4->profile_type = 'empresa';
        $user4->country = 'España';
        $user4->business_name = 'Lana Inc.';       
        $user4->subscription_type = 'basic';

        $user4->save();

        $user5 = new User();
        
        $user5->id = '6';
        $user5->name = 'Juan Pablo Gutierrez';
        $user5->email = 'jp@email.com';
        $user5->password = '12345678';
        $user5->position = 'Presidente';
        $user5->profile_type = 'empresa';
        $user5->country = 'España';
        $user5->business_name = 'U Food';       
        $user5->subscription_type = 'basic';

        $user5->save();

        $user6 = new User();
        
        $user6->id = '7';
        $user6->name = 'Jordi Carles Andorra';
        $user6->email = 'jordi@email.com';
        $user6->password = '12345678';
        $user6->position = 'Manager';
        $user6->profile_type = 'empresa';
        $user6->country = 'España';
        $user6->business_name = 'ZZ Zapatos';       
        $user6->subscription_type = 'basic';

        $user6->save();

        $user7 = new User();
        
        $user7->id = '8';
        $user7->name = 'Eva Siciliano';
        $user7->email = 'eva@email.com';
        $user7->password = '12345678';
        $user7->position = 'CEO';
        $user7->profile_type = 'empresa';
        $user7->country = 'España';
        $user7->business_name = 'EVE CAKES';       
        $user7->subscription_type = 'basic';

        $user7->save();
    }
}

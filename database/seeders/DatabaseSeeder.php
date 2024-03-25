<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $users = \App\Models\User::factory(5)->create();

        foreach ($users as $user) {
            \App\Models\Profile::factory()->create(['user_id' => $user->id]);
        }

}
}
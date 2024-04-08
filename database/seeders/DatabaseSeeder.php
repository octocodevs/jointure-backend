<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use Database\Seeders\ProposalSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ProfileSeeder;
class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
       $this->call(UserSeeder::class);
       $this->call(ProfileSeeder::class);
        $this ->call(ProposalSeeder::class);
    }
}
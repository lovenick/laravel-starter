<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $adminUser = User::factory()->create([
            'name' => 'Nick Loveridge',
            'email' => 'nick@fusemedia.ca',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
        ]);

        $freeUser = User::factory()->create([
            'name' => 'Free User',
            'email' => 'free@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
        ]);

        // User::factory(10)->create();
    }
}

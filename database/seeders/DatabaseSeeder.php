<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(2)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'role' => 'nasabah',
        //     'password' => 'nasabah123',
        //     'email' => 'test@example.com',
        // ]);
        User::Create([
            'name' =>'andry septian',
            'role' => 'nasabah',
            'password' => 'nasabah123',
            'email' => 'test@example.com',
            'email_verified_at' => now()
        ]);
    }
}

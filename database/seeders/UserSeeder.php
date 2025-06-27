<?php
// File: database/seeders/UserSeeder.php
// Jalankan: php artisan make:seeder UserSeeder

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Admin user
        User::create([
            'name' => 'Admin Sistem',
            'email' => 'admin@inklusivitas.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'email_verified_at' => now(),
        ]);

        // Coordinator user
        User::create([
            'name' => 'Koordinator Program',
            'email' => 'coordinator@inklusivitas.com',
            'password' => Hash::make('password'),
            'role' => 'coordinator',
            'email_verified_at' => now(),
        ]);

        // Additional coordinators
        User::create([
            'name' => 'Sari Dewi',
            'email' => 'sari@inklusivitas.com',
            'password' => Hash::make('password'),
            'role' => 'coordinator',
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'Budi Santoso',
            'email' => 'budi@inklusivitas.com',
            'password' => Hash::make('password'),
            'role' => 'coordinator',
            'email_verified_at' => now(),
        ]);
    }
}
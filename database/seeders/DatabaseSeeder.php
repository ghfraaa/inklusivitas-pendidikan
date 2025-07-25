<?php
// File: database/seeders/DatabaseSeeder.php
// Update existing DatabaseSeeder

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ProgramSeeder::class,
            ParticipantSeeder::class,
        ]);
    }
}
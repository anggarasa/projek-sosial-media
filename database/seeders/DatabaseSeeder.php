<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Anggara Saputra',
            'username' => 'xang_ra',
            'email' => 'anggara@gmail.com',
            'password' => bcrypt('angga123'),
        ]);

        User::factory()->create([
            'name' => 'Wiwi',
            'username' => 'Xiwi',
            'email' => 'wiwi@gmail.com',
            'password' => bcrypt('wiwi123'),
        ]);
    }
}

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
            'name' => 'Admin Syahnaz Florist',
            'email' => 'admin@syahnazflorist.com',
            'password' => bcrypt('Syahnaz123*'),
        ]);

        // $this->call([
        //     CategoriesSeed::class,
        //     ProductSeed::class,
        // ]);
    }
}

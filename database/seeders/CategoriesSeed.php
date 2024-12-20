<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CategoriesSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Papan Bunga Duka Cita', 'slug' => 'papan-bunga-duka-cita'],
            ['name' => 'Papan Bunga Pernikahan', 'slug' => 'papan-bunga-pernikahan'],
            ['name' => 'Papan Bunga Selamat & Sukses', 'slug' => 'papan-bunga-selamat-sukses'],
        ];

        foreach ($categories as $category) {
            Categories::create($category);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Producto::factory(10)->create();
    }
}

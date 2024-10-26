<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Primeiro executa os seeders de fabricantes e vendedores
        $this->call(FabricantesSeeder::class);
        $this->call(VendedoresSeeder::class);

        // Em seguida, executa o seeder de carros
        $this->call(CarrosSeeder::class);
    }
}

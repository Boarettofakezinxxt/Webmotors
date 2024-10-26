<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FabricantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $fabricantes = [
            ['nome' => 'Toyota', 'pais' => 'Japão'],
            ['nome' => 'Ford', 'pais' => 'Estados Unidos'],
            ['nome' => 'Volkswagen', 'pais' => 'Alemanha'],
            ['nome' => 'Fiat', 'pais' => 'Itália'],
            ['nome' => 'Renault', 'pais' => 'França'],
        ];

        DB::table('fabricantes')->insert($fabricantes);
    }
}

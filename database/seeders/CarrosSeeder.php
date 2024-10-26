<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $carros = [
            [
                'nome' => 'Corolla',
                'modelo' => 'XEi 2.0',
                'ano' => 2020,
                'preco' => 105000.00,
                'descricao' => 'Sedan médio com excelente consumo e conforto.',
                'imagem' => null,
                'fabricante_id' => 1,
                'vendedor_id' => 1,
            ],
            [
                'nome' => 'Focus',
                'modelo' => 'Titanium 2.0',
                'ano' => 2018,
                'preco' => 85000.00,
                'descricao' => 'Hatch médio com ótimo desempenho e espaço interno.',
                'imagem' => null,
                'fabricante_id' => 2,
                'vendedor_id' => 2,
            ],
            [
                'nome' => 'Golf',
                'modelo' => 'Comfortline 1.4 TSI',
                'ano' => 2019,
                'preco' => 95000.00,
                'descricao' => 'Hatch com motorização turbo e ótimo desempenho.',
                'imagem' => null,
                'fabricante_id' => 3,
                'vendedor_id' => 3,
            ],
            [
                'nome' => 'Argo',
                'modelo' => 'Drive 1.0',
                'ano' => 2021,
                'preco' => 60000.00,
                'descricao' => 'Compacto econômico e moderno.',
                'imagem' => null,
                'fabricante_id' => 4,
                'vendedor_id' => 4,
            ],
            [
                'nome' => 'Clio',
                'modelo' => 'Expression 1.0',
                'ano' => 2015,
                'preco' => 35000.00,
                'descricao' => 'Hatch compacto com ótima relação custo-benefício.',
                'imagem' => null,
                'fabricante_id' => 5,
                'vendedor_id' => 5,
            ],
        ];

        DB::table('carros')->insert($carros);
    }
}

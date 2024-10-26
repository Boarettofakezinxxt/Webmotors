<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Dados de exemplo para a tabela vendedores
        $vendedores = [
            [
                'nome' => 'Carlos Silva',
                'email' => 'carlos@vendas.com',
                'telefone' => '(49) 99999-1111',
                'endereco' => 'Rua A, 123, São Paulo, SP',
            ],
            [
                'nome' => 'Mariana Oliveira',
                'email' => 'mariana@vendas.com',
                'telefone' => '(49) 98888-2222',
                'endereco' => 'Av. B, 456, Rio de Janeiro, RJ',
            ],
            [
                'nome' => 'Roberto Santos',
                'email' => 'roberto@vendas.com',
                'telefone' => '(49) 97777-3333',
                'endereco' => 'Rua C, 789, Belo Horizonte, MG',
            ],
            [
                'nome' => 'Ana Souza',
                'email' => 'ana@vendas.com',
                'telefone' => '(49) 96666-4444',
                'endereco' => 'Rua D, 101, Curitiba, PR',
            ],
            [
                'nome' => 'Luiz Mendes',
                'email' => 'luiz@vendas.com',
                'telefone' => '(51) 95555-5555',
                'endereco' => 'Av. E, 202, Porto Alegre, RS',
            ],
        ];

        // Inserir os dados na tabela vendedores
        DB::table('vendedores')->insert($vendedores);
    }
}

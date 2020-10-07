<?php

namespace Database\Seeders;

use App\Models\TamanhoPelagem;
use Illuminate\Database\Seeder;

class TamanhoPelagemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tamanhos = [
            'Curta',
            'Média',
            'Longa',
        ];

        foreach ($tamanhos as $tamanho) {
            TamanhoPelagem::create(['descricao' => $tamanho]);
        }
    }
}

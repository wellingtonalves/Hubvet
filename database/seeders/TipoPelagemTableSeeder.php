<?php

namespace Database\Seeders;

use App\Models\TipoPelagem;
use Illuminate\Database\Seeder;

class TipoPelagemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos = [
            'Lisa',
            'Ondulada',
            'Cacheada',
        ];

        foreach ($tipos as $tipo) {
            TipoPelagem::create(['descricao' => $tipo]);
        }
    }
}

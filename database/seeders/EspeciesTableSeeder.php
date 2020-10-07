<?php

namespace Database\Seeders;

use App\Models\Especies;
use App\Models\Racas;
use Illuminate\Database\Seeder;

class EspeciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $especies = [
            [
                'nome' => 'Canina',
                'racas' => [
                    'Cão afegão',
                    'Dachshund',
                    'Labrador Retriever',
                    'Cão de água português',
                    'Akita',
                    'Doberman',
                    'Pinscher',
                ]
            ],
            [
                'nome' => 'Felina',
                'racas' => [
                    'Angorá',
                    'Ashera',
                    'Balinês',
                    'Bengal',
                    'Bobtail americano',
                    'Bobtail japonês',
                    'Bombay',
                    'Burmês',
                    'Burmês vermelho',
                    'Chartreux',
                ]
            ]
        ];

        foreach ($especies as $especie) {
            $model = Especies::create(['nome' => $especie['nome']]);
            $racas = [];
            foreach ($especie['racas'] as $raca) {
                $racas[] = new Racas(['nome' => $raca]);
            }

            $model->racas()->saveMany($racas);
        }
    }
}

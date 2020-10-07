<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;

class BootstrapSeeder extends Seeder
{

    /**
     * Run
     */
    public function run()
    {
        $this->call(EspeciesTableSeeder::class);
        $this->call(TamanhoPelagemTableSeeder::class);
        $this->call(TipoPelagemTableSeeder::class);
    }
}

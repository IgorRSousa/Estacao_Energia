<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\EstacaoEnergiaSeeder;
use Database\Seeders\EstacaoMediaMensalSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
           EstacaoEnergiaSeeder::class, 
           EstacaoMediaMensalSeeder::class,
        ]);
    }
}

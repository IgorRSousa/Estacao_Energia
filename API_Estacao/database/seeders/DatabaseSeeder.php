<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\EstacaoEnergiaSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(EstacaoEnergiaSeeder::class);
    }
}

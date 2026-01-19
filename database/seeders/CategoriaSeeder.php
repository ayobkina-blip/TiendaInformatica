<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    public function run(): void
    {
        $categorias = [
            ['name' => 'Ordenadores'],
            ['name' => 'Portátiles'],
            ['name' => 'Monitores'],
            ['name' => 'Periféricos'],
            ['name' => 'Componentes'],
            ['name' => 'Accesorios'],
        ];

        DB::table('categorias')->insert($categorias);
    }
}
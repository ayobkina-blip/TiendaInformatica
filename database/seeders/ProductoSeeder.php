<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        // Obtener los IDs de las categorías recién creadas
        $categoriaIds = DB::table('categorias')->pluck('id')->toArray();

        // Imágenes disponibles en tu carpeta storage/app/public/img
        $imagenes = [
            'laptop-pro.jpg',
            'monitor-34.jpg',
            'pc-gaming.jpg',
            'workstation.jpg'
        ];

        for ($i = 1; $i <= 30; $i++) {
            DB::table('productos')->insert([
                'name' => 'Producto Ejemplo ' . $i,
                'descripcion' => 'Esta es la descripción del producto ' . $i . ' con excelentes calidades.',
                'precio' => rand(10, 1500),
                'stock' => rand(0, 100),
                'enlace' => 'img/' . $imagenes[array_rand($imagenes)], // Imagen aleatoria
                'categoria_id' => $categoriaIds[array_rand($categoriaIds)], // Categoría aleatoria obligatoria
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
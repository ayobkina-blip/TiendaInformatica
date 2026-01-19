<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //Creacion de la tabla categoria
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
        //Creacion de la tabla productos
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('descripcion');
            $table->integer('precio');
            $table->integer('stock');
            $table->string('enlace');
            $table->foreignId('categoria_id');
            $table->timestamps();
        });
        //Creacion de la tabla compras_realizadas
        Schema::create('compras_realizadas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('producto_id');
            $table->foreignId('usuario_id');

        });
        //Creacion de la tabla cesta
        Schema::create('cesta', function(Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id');
            $table->foreignId('producto_id');
            $table->integer('cantidad');
        });

    }

    /**
     * Reverse the migrations.
     */

    //Borrar tablas
    public function down(): void
    {
        Schema::dropIfExists('productos');
        Schema::dropIfExists('categoria');
        Schema::dropIfExists('compras_realizadas');
        Schema::dropIdExists('cesta');
    }
};

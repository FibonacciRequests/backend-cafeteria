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
        Schema::create('categoria_productos', function (Blueprint $table) {
        
            $table->unsignedTinyInteger('idCategoria');
            $table->unsignedTinyInteger('idProducto');

            $table->foreign('idCategoria')
                  ->references('id')->on('categorias')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->foreign('idProducto')
                  ->references('id')->on('productos')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->primary(['idCategoria','idProducto']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoria_productos');
    }
};

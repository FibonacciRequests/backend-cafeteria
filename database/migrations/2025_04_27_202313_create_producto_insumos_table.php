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
        Schema::create('producto_insumos', function (Blueprint $table) {
          
            $table->unsignedTinyInteger('idProducto');
            $table->unsignedSmallInteger('idInsumo');
            $table->decimal('cantidadRequerida',5,3)->nullable();
            $table->string('idSistemaMedida',2);

            $table->foreign('idSistemaMedida')
                  ->references('id')->on('sistema_medidas')
                  ->onUpdate('restrict')
                  ->onDelete('restrict');

            $table->foreign('idProducto')
                  ->references('id')->on('productos')
                  ->onUpdate('restrict')
                  ->onDelete('restrict');

            $table->foreign('idInsumo')
                  ->references('id')->on('insumos')
                  ->onUpdate('restrict')
                  ->onDelete('restrict');

            $table->primary(['idProducto','idInsumo']);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_insumos');
    }
};

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
        Schema::create('compra_insumos', function (Blueprint $table) {
            
            $table->unsignedSmallInteger('idInsumo');
            $table->unsignedMediumInteger('idCompra');
            $table->decimal('precio',5,2);
            $table->string('idSistemaMedida',2);
                 
            $table->foreign('idSistemaMedida')
                  ->references('id')->on('sistema_medidas')
                  ->onUpdate('restrict')
                  ->onDelete('restrict');
                  
            
            $table->foreign('idInsumo')
                  ->references('id')->on('insumos')
                  ->onUpdate('restrict')
                  ->onDelete('restrict');

            
            $table->foreign('idCompra')
                  ->references('id')->on('compras')
                  ->onUpdate('restrict')
                  ->onDelete('restrict');

            
            $table->primary(['idCompra','idInsumo']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compra_insumos');
    }
};

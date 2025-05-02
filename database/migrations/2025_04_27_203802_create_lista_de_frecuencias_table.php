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
        Schema::create('lista_de_frecuencias', function (Blueprint $table) {

            $table->string('codigoCliente',6);
            $table->unsignedMediumInteger('nroPedido');

            $table->primary(['codigoCliente','nroPedido']);

            $table->foreign('codigoCliente')
            ->references('codigo')->on('cliente_con_codigos')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('nroPedido')
            ->references('nro')->on('pedidos')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lista_de_frecuencias');
    }
};

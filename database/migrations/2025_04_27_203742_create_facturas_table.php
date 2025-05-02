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
        Schema::create('facturas', function (Blueprint $table) {
            
            $table->smallIncrements('codigo');
            $table->unsignedInteger('ci');
            $table->unsignedInteger('nit');
            $table->string('correoElectronico',50);

            $table->unsignedMediumInteger('nroPedido');

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
        Schema::dropIfExists('facturas');
    }
};

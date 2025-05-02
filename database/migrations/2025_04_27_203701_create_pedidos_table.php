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
        Schema::create('pedidos', function (Blueprint $table) {
            
            $table->mediumIncrements('nro');
            $table->date('fecha');
            $table->decimal('monto',5,2);
            $table->string('tipo',1);

            $table->unsignedInteger('ciPersonal');
            $table->enum('estadoPreparacion',['en_preparacion','entregado'])->default('en_preparacion');
            $table->enum('estadoPago',['pendiente','pagado'])->default('pendiente');

            $table->string('idMetodoPago',2);

            $table->foreign('ciPersonal')
                  ->references('ci')->on('personals')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->foreign('idMetodoPago')
                  ->references('id')->on('metodo_pagos')
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
        Schema::dropIfExists('pedidos');
    }
};

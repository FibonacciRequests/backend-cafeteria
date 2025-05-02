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
        Schema::create('adomicilios', function (Blueprint $table) {
           
            $table->unsignedMediumInteger('nroPedido')->primary();
            $table->string('ubicacion',50);
            $table->string('telefono',19);
            $table->string('personaRecibe',50);

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
        Schema::dropIfExists('adomicilios');
    }
};

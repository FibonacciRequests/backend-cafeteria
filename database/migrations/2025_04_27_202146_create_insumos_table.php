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
        Schema::create('insumos', function (Blueprint $table) {
            
            $table->smallIncrements('id');
            $table->string('nombre',25);
            $table->unsignedSmallInteger('stock');
            $table->string('sistema_medida_id',2);

            $table->foreign('sistema_medida_id')->references('id')
            ->on('sistema_medidas')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insumos');
    }
};

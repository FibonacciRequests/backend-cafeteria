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
        Schema::create('producto_promocions', function (Blueprint $table) {
            
            $table->unsignedTinyInteger('IdProducto');
            $table->unsignedSmallInteger('IdPromocion');
            
            $table->unsignedTinyInteger('descuento');
            $table->unsignedSmallInteger('parametro');

            $table->primary(['IdProducto','IdPromocion']);

            $table->foreign('IdProducto')
            ->references('id')->on('productos')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('IdPromocion')
            ->references('id')->on('promocions')
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
        Schema::dropIfExists('producto_promocions');
    }
};

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
        Schema::create('detalle_pedido_productos', function (Blueprint $table) {
           
            $table->unsignedTinyInteger('idProducto');
            $table->unsignedMediumInteger('nroPedido');
            $table->unsignedTinyInteger('cantidad');

            $table->foreign('idProducto')
                  ->references('id')->on('productos')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            
            $table->foreign('nroPedido')
                  ->references('nro')->on('pedidos')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            
            $table->primary(['idProducto','nroPedido']);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_pedido_productos');
    }
};

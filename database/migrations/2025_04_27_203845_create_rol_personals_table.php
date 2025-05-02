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
        Schema::create('rol_personals', function (Blueprint $table) {
           
            $table->unsignedTinyInteger('codigoRol');
            $table->unsignedInteger('ciPersonal');

            $table->foreign('codigoRol')
                  ->references('codigo')->on('rols')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->foreign('ciPersonal')
                  ->references('ci')->on('personals')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->primary(['codigoRol','ciPersonal']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rol_personals');
    }
};

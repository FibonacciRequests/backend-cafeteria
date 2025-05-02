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
        Schema::create('rols', function (Blueprint $table) {
            $table->tinyIncrements('codigo');
            $table->string('nombre',20);
            $table->string('manual',30)->nullable();
            $table->timestamps();
        });

        DB::statement("ALTER TABLE rols AUTO_INCREMENT = 100;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rols');
    }
};

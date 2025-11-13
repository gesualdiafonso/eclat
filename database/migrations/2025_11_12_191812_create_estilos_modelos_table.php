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
        Schema::create('estilos_modelos', function (Blueprint $table) {
            $table->foreignId('modelos_fk')->constrained(table: 'modelos', column: 'id');
            $table->unsignedSmallInteger('estilos_fk');
            $table->foreign('estilos_fk')->references('estilos_id')->on('estilos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estilos_modelos');
    }
};

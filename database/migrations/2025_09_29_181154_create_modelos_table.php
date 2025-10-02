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
        Schema::create('modelos', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('image');
            $table->decimal('altura', 5, 2);
            $table->integer('bust');
            $table->integer('cintura');
            $table->integer('zapato');
            $table->integer('vestido');
            $table->string('tamano');
            $table->string('ojos');
            $table->string('cabello');
            $table->date('fecha_nacimiento');
            $table->string('ubicacion')->nullable();
            $table->string('instagram')->nullable();
            $table->longText('description');
            $table->json('estilos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modelos');
    }
};

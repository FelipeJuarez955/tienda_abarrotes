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
        Schema::create('productos', function (Blueprint $table) {
            $table->id(); // Columna 'id' auto-incremental
            $table->string('nombre', 255); // Columna 'nombre' tipo varchar de hasta 255 caracteres
            $table->string('categoria', 100); // Columna 'categoria' tipo varchar de hasta 100 caracteres
            $table->decimal('precio', 8, 2); // Columna 'precio' tipo decimal con 8 dígitos en total, 2 después del punto decimal
            $table->integer('cantidad'); // Columna 'cantidad' tipo integer
            $table->string('unidad_medida', 50); // Columna 'unidad_medida' tipo varchar de hasta 50 caracteres
            $table->timestamps(); // Crea 'created_at' y 'updated_at' automáticamente
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};

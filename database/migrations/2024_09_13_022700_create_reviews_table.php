<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::create('reviews', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('product_id'); // Relación con el producto
        $table->string('name'); // Nombre del usuario
        $table->string('email'); // Email del usuario
        $table->integer('rating'); // Calificación (1-5)
        $table->text('review'); // Contenido de la reseña
        $table->timestamps();

        // Define la clave foránea que conecta con la tabla products
        $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};

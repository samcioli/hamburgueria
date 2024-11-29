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
        Schema::create('itempedidos', function (Blueprint $table) {
            $table->id(); // Adiciona um ID para o itempedido
            $table->double('valorunitario');
            $table->integer('quantidade');
            $table->double('subtotal');
            $table->string('observacoes')->nullable(); // Tornando observacoes opcional
            $table->integer('status'); // A coluna de status (pode ser usado como inteiro)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itempedidos');
    }
};

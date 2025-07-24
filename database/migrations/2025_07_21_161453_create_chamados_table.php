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
        Schema::create('chamados', function (Blueprint $table) {
            $table->id();
            $table->string('ticket');
            $table->enum('categoria', ['Impressora', 'Redes', 'Manutenção PC', 'Relogio de ponto', 'Software']);
            $table->enum('prioridade', ['Baixa', 'Media', 'Alta']);
            $table->enum('status', ['Aberto', 'Concluido'])->default('Aberto');
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chamados');
    }
};

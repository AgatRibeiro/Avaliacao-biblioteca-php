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
        Schema::create('livro', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('editora_id');
            $table->date('data_publicacao');
            $table->text('sinopse');
            $table->timestamp('criado_em')->nullable();
            $table->timestamp('atualizado_em')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livro');
    }
};

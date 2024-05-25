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
        Schema::create('nf_carregadas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transportadora_id');
            $table->unsignedBigInteger('carregamento_id');
            $table->string('numero_nf');
            $table->string('chave_nf');
            $table->timestamps();

            $table->foreign('transportadora_id')->references('id')->on('transportadoras');
            $table->foreign('carregamento_id')->references('id')->on('carregamentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nf_carregadas');
    }
};

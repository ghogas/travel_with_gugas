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
        Schema::create('roteiros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('destino');
            $table->string('estadia');
            $table->text('dinheiro');
            $table->text('tipo');
            $table->text('descricao');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roteiros');
    }
};

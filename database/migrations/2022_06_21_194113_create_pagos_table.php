<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->char('numero',7);
            $table->text('observaciones');
            $table->foreignId('colegiado_id')->nullable()->constrained('colegiados')->onUpdate('cascade');
            $table->foreignId('sede_id')->constrained('sedes')->onUpdate('cascade');
            $table->foreignId('forma_pago_id')->constrained('forma_pagos')->onUpdate('cascade');
            $table->foreignId('persona_id')->nullable()->constrained('personas')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimientos', function (Blueprint $table) {
            $table->id();
            $table->dateTime('hora');
            $table->foreignId('tramite-id')->constrained('tramites')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('oficina_origen');
            $table->foreign('oficina_origen')->references('id')->on('oficinas')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('oficina_destino');
            $table->foreign('oficina_destino')->references('id')->on('oficinas')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('seguimientos');
    }
}

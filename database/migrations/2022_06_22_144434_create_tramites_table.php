<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTramitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tramites', function (Blueprint $table) {
            $table->id();
            $table->string('asunto',100);
            $table->dateTime('fecha_emi');
            $table->dateTime('fecha_recep');
            $table->foreignId('colegiado_id')->nullable()->constrained('colegiados')
                ->onUpdate('cascade');
            $table->foreignId('persona_id')->nullable()->constrained('personas')
                ->onUpdate('cascade');
            $table->foreignId('tipo_tramite_id')->constrained('tipo_tramites')
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
        Schema::dropIfExists('tramites');
    }
}

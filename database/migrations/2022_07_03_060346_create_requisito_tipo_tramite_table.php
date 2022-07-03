<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequisitoTipoTramiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisito_tipo_tramite', function (Blueprint $table) {
            $table->id();
            $table->foreignId('requisito_id')->constrained('requisitos')
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
        Schema::dropIfExists('requisito_tipo_tramite');
    }
}

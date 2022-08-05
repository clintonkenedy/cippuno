<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColegiadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colegiados', function (Blueprint $table) {
            $table->id();
            $table->string('nombres',80);
            $table->char('codigo_colegiado',6);
            $table->char('dni',8);
            $table->string('a_paterno',50);
            $table->string('a_materno',50);
            $table->string('direccion',80);
            $table->date('ultimo_pago');
            $table->foreignId('capitulo_id')->constrained('capitulos')->onUpdate('cascade');
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
        Schema::dropIfExists('colegiados');
    }
}

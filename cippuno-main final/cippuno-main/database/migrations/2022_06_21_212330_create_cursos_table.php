<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',60);
            $table->text('enlace');
            $table->float('precio');
            $table->string('duracion',50);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->text('temario');
            $table->text('ponentes');
            $table->string('modelo_certificado');
            $table->enum('estado',[0,1,2,3,4]);
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
        Schema::dropIfExists('cursos');
    }
}

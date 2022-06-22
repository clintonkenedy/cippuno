<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id();
            $table->char('codigo',50);
            $table->foreignId('colegiado_id')->constrained('colegiados')
                ->onUpdate('cascade');
            $table->foreignId('curso_id')->constrained('cursos')
                ->onUpdate('cascade');
            $table->foreignId('pago_id')->constrained('pagos')
                ->onUpdate('cascade');
            $table->foreignId('persona_id')->constrained('personas')
                ->onUpdate('cascade');
            $table->foreignId('rol_matricula_id')->constrained('rol_matriculas')
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
        Schema::dropIfExists('matriculas');
    }
}

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

            // add nullable attributes for testing table
            $table->string('nombres',80)->nullable();
            $table->char('codigo_colegiado',6)->nullable();
            $table->char('dni',8)->nullable();
            $table->string('a_paterno',50)->nullable();
            $table->string('a_materno',50)->nullable();
            $table->string('direccion',80)->nullable();
            $table->date('ultimo_pago')->nullable();
            $table->foreignId('capitulo_id')->nullable()->constrained('capitulos')->onUpdate('cascade');

            // add columns for login
            $table->string('email')->unique();
            $table->string('password');

            // add columns for profile
            $table->string('description')->nullable(); // carrera(s)
            $table->string('photo')->nullable();

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

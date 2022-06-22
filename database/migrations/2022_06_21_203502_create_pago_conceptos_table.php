<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoConceptosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_conceptos', function (Blueprint $table) {
            $table->id();
            $table->string('cantidad',50);
            $table->double('precio',8,4);
            $table->foreignId('pago_id')->constrained('pagos')
                ->onUpdate('cascade');
            $table->foreignId('concepto_id')->constrained('conceptos')
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
        Schema::dropIfExists('pago_conceptos');
    }
}

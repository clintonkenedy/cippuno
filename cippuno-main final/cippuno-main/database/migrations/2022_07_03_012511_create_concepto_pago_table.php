<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConceptoPagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concepto_pago', function (Blueprint $table) {
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
        Schema::dropIfExists('concepto_pago');
    }
}

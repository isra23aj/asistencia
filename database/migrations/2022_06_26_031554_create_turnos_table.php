<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turnos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_turno');
            $table->string('nombre_turno');
            $table->string('descripcion')->nullable();
            $table->integer('horas_trabajo')->nullable();
            $table->integer('hora_entrada_am')->nullable();
            $table->integer('hora_salida_am')->nullable();
            $table->integer('hora_entrada_pm')->nullable();
            $table->integer('hora_salida_pm')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turnos');
    }
};

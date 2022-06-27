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
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->time('hora_entrada_am')->nullable();
            $table->time('hora_salida_am')->nullable();
            $table->time('hora_entrada_pm')->nullable();
            $table->time('hora_salida_pm')->nullable();
            $table->string('codigo_empleado')->nullable();

            $table->foreignId('id_biometrico')
            ->nullable()
            ->constrained('biometricos')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_empleado')
            ->nullable()
            ->constrained('empleados')
            ->cascadeOnUpdate()
            ->nullOnDelete();      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registros');
    }
};

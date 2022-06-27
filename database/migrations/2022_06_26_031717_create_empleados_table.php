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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nic');        
            $table->string('codigo_empleado');        
            $table->string('nombres');        
            $table->string('apellido_paterno');        
            $table->string('apellido_materno');        
            $table->string('telefono')->nullable();        
            $table->integer('celular')->nullable();        
            $table->string('email')->nullable();        
            $table->string('profesión')->nullable();        
            $table->string('puesto')->nullable();        



            $table->foreignId('id_departamento')
            ->nullable()
            ->constrained('departamentos')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_turno')
            ->nullable()
            ->constrained('turnos')
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
        Schema::dropIfExists('empleados');
    }
};

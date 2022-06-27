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
        Schema::create('permisos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_pedido');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('nro_dias')->nullable();
            $table->string('motivo')->nullable();
            $table->string('tipo_permiso')->nullable();
            $table->string('autoriza')->nullable();

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
        Schema::dropIfExists('permisos');
    }
};

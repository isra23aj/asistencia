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
        Schema::create('multas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha')->nullable();

            $table->foreignId('id_empleado')
            ->nullable()
            ->constrained('empleados')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_registro')
            ->nullable()
            ->constrained('registros')
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
        Schema::dropIfExists('multas');
    }
};

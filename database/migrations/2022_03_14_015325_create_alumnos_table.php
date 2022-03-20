<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table) {
            $table->string('carne');
            $table->string('nombre');
            $table->string('alias');
            $table->string('foto');
            $table->string('correo');
            $table->date('fecha_nacimiento');
            $table->string('telefono');
            $table->unsignedBigInteger('fk_id_categoria');
            $table->foreign("fk_id_categoria")->references("id_categoria")->on("categoria")
            ->onDelete("cascade");
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
        Schema::dropIfExists('alumno');
    }
}

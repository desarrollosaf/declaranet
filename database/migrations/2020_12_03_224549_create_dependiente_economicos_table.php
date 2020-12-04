<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDependienteEconomicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependiente_economicos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("primer_apellido");
            $table->string("segundo_apellido")->nullable();
            $table->date("fecha_nacimiento");
            $table->string("rfc")->nullable();
            $table->unsignedBigInteger("relacion_transmisor_id");
            $table->foreign('relacion_transmisor_id')->references('id')->on('relacion_transmisores');
            $table->string("relacion_transmisor")->nullable();
            $table->unsignedBigInteger('lugar_ubicacion_id');
            $table->foreign('lugar_ubicacion_id')->references('id')->on('lugares_ubicacion');
            $table->string('curp');
            $table->unsignedBigInteger('respuesta_id');
            $table->foreign('respuesta_id')->references('id')->on('respuestas');
            $table->unsignedBigInteger('lugar_residencia_id');
            $table->foreign('lugar_residencia_id')->references('id')->on('lugar_donde_resides');
            $table->softDeletes();
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
        Schema::dropIfExists('de    pendiente_economicos');
    }
}

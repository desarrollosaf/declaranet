<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFideicomisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fideicomisos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('declaracion_id');
            $table->foreign('declaracion_id')->references('id')->on('declaraciones');
            $table->unsignedBigInteger('tipo_relaciones_id')->nullable();
            $table->foreign('tipo_relaciones_id')->references('id')->on('tipo_relaciones');
            $table->unsignedBigInteger('tipo_fideicomisos_id');
            $table->foreign('tipo_fideicomisos_id')->references('id')->on('tipo_fideicomisos');
            $table->unsignedBigInteger('tipo_participacion_fideicomisos_id');
            $table->foreign('tipo_participacion_fideicomisos_id')->references('id')->on('tipo_participacion_fideicomisos');
            $table->unsignedBigInteger('tipo_persona_fideicomiso');
            $table->foreign('tipo_persona_fideicomiso')->references('id')->on('regimen_fiscal');
            $table->string('nombre_persona_fisica')->nullable();
            $table->string('rfc_persona_fisica')->nullable();
            $table->string('nombre_persona_moral')->nullable();
            $table->string('rfc_persona_moral')->nullable();
            $table->unsignedBigInteger('tipo_persona_fideicomitente');
            $table->foreign('tipo_persona_fideicomitente')->references('id')->on('tipo_persona_fideicomisos');
            $table->string('nombre_fideicomitente_fisica')->nullable();
            $table->string('rfc_fideicomitente_fisica')->nullable();
            $table->string('nombre_fideicomitente_moral')->nullable();
            $table->string('rfc_fideicomitente_moral')->nullable();
            $table->unsignedBigInteger('tipo_persona_fiduciario');
            $table->foreign('tipo_persona_fiduciario')->references('id')->on('regimen_fiscal');
            $table->string('nombre_fiduciario_fisica')->nullable();
            $table->string('rfc_fiduciario_fisica')->nullable();
            $table->string('nombre_fiduciario_moral')->nullable();
            $table->string('rfc_fiduciario_moral')->nullable();
            $table->unsignedBigInteger('tipo_persona_fideicomisario');
            $table->foreign('tipo_persona_fideicomisario')->references('id')->on('tipo_persona_fideicomisos');
            $table->string('nombre_fideicomisario_fisica')->nullable();
            $table->string('rfc_fideicomisario_fisica')->nullable();
            $table->string('nombre_fideicomisario_moral')->nullable();
            $table->string('rfc_fideicomisario_moral')->nullable();
            $table->unsignedBigInteger('sectores_id');
            $table->foreign('sectores_id')->references('id')->on('sectores');
            $table->string('especifique_sector')->nullable();
            $table->unsignedBigInteger('lugares_ubicacion_id');
            $table->foreign('lugares_ubicacion_id')->references('id')->on('lugares_ubicacion');
            $table->unsignedBigInteger('entidades_id')->nullable();
            $table->foreign('entidades_id')->references('id')->on('entidades');
            $table->string("pais")->nullable();
            $table->string('aclaraciones')->nullable();
            $table->string("tipoOperacion")->nullable();
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
        Schema::dropIfExists('fideicomisos');
    }
}
